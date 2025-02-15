<?php
// Include database connection settings from config.php
include('config.php');

// Start the session
session_start();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $wallet = $_POST['wallet'];

    // Check if email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM submissions WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = 'You have already submitted your email.';
        // Redirect with error message only (no position, referral code, or total)
        header("Location: index.php?#airdropform");
        exit;
    } else {
        // Calculate position based on total participants
        $totalResult = $conn->query("SELECT COUNT(*) AS total FROM submissions");
        $total = $totalResult->fetch_assoc()['total'];
        $position = 3000 + $total + 1; // Static 3000 + total count + 1
        $referralCode = "ref=" . strtoupper(substr(md5(rand()), 0, 8));

        // Insert new submission
        $stmt = $conn->prepare("INSERT INTO submissions (email, wallet_address, referral_code, position) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $email, $wallet, $referralCode, $position);

        if ($stmt->execute()) {
            // Submission successful
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Submission successful!';
            $_SESSION['position'] = $position;
            $_SESSION['referral_code'] = $referralCode;
            $_SESSION['total'] = $total;

            // Redirect without URL parameters
            header("Location: index.php?#airdropform");
            exit;
        } else {
            // Something went wrong
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Something went wrong. Please try again.';
            // Redirect with error message only
            header("Location: index.php?#airdropform");
            exit;
        }

        $stmt->close();
    }

    // Close the connection
    $conn->close();
}

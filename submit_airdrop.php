<?php
// Include database connection settings from config.php
include('config.php');

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
        $status = 'error';
        $message = 'You have already submitted your email.';
        // Redirect with error message only (no position, referral code, or total)
        header("Location: index.php?status=$status&message=" . urlencode($message));
        exit;
    } else {
        // Calculate position based on total participants
        $totalResult = $conn->query("SELECT COUNT(*) AS total FROM submissions");
        $total = $totalResult->fetch_assoc()['total'];
        $position = 3000 + $total + 1; // Static 3000 + total count + 1
        $referralCode = "REF-" . strtoupper(substr(md5(rand()), 0, 8));

        // Insert new submission
        $stmt = $conn->prepare("INSERT INTO submissions (email, wallet_address, referral_code, position) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $email, $wallet, $referralCode, $position);

        if ($stmt->execute()) {
            // Submission successful
            $status = 'success';
            $message = 'Submission successful!';
            // Redirect with the success message and data
            header("Location: index.php?status=$status&message=" . urlencode($message) . "&position=$position&referral_code=$referralCode&total=$total");
            exit;
        } else {
            // Something went wrong
            $status = 'error';
            $message = 'Something went wrong. Please try again.';
            // Redirect with error message only
            header("Location: index.php?status=$status&message=" . urlencode($message));
            exit;
        }

        $stmt->close();
    }

    // Close the connection
    $conn->close();
}

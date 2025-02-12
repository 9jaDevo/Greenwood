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
        $message = "You have already submitted your email.";
        $status = "error";
    } else {
        // Increment position (based on the current total number of participants)
        $totalResult = $conn->query("SELECT COUNT(*) AS total FROM submissions");
        $total = $totalResult->fetch_assoc()['total'];
        $position = 3000 + $total + 1; // Static 3000 + current number of participants + 1
        $referralCode = "REF-" . strtoupper(substr(md5(rand()), 0, 8));

        // Insert new submission
        $stmt = $conn->prepare("INSERT INTO submissions (email, wallet_address, referral_code, position) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $email, $wallet, $referralCode, $position);

        if ($stmt->execute()) {
            // Submission successful
            $message = "Submission successful!";
            $status = "success";
        } else {
            // Something went wrong
            $message = "Something went wrong. Please try again.";
            $status = "error";
        }

        $stmt->close();
    }

    // Close the connection
    $conn->close();
}

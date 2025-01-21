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
        echo json_encode(["status" => "error", "message" => "You have already submitted your email."]);
        exit;
    }

    // Increment position
    $position = rand(3000, 3010); // Random position for simplicity
    $referralCode = "REF-" . strtoupper(substr(md5(rand()), 0, 8));

    // Insert new submission
    $stmt = $conn->prepare("INSERT INTO submissions (email, wallet_address, referral_code, position) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $email, $wallet, $referralCode, $position);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Submission successful!", "position" => $position, "referral_code" => $referralCode]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something went wrong. Please try again."]);
    }

    $stmt->close();
    $conn->close();
}

<?php

include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $otp = trim($_POST['otp'] ?? '');

    if (empty($email) || empty($otp)) {
        echo json_encode([
            "status" => "error",
            "message" => "Email and OTP are required."
        ]);
        exit;
    }

    // Fetch OTP and expiration
    $stmt = $conn->prepare("SELECT otp_code, otp_expires_at FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($storedOtp, $expiresAt);
    $stmt->fetch();
    $stmt->close();

    if (!$storedOtp) {
        echo json_encode([
            "status" => "error",
            "message" => "Email not found or OTP not set."
        ]);
        exit;
    }

    if ($otp !== $storedOtp) {
        echo json_encode([
            "status" => "error",
            "message" => "Incorrect OTP."
        ]);
        exit;
    }

    if (strtotime($expiresAt) < time()) {
        echo json_encode([
            "status" => "error",
            "message" => "OTP has expired. Please request a new one."
        ]);
        exit;
    }

    // Mark user as verified
    $stmt = $conn->prepare("UPDATE users SET is_verified = 1, otp_code = NULL, otp_expires_at = NULL WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->close();

    echo json_encode([
        "status" => "success",
        "message" => "Email verified successfully!"
    ]);
    exit;
}
?>

<?php

include '../includes/db.php'; // your database connection file
require_once '../services/email/email_service.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    if (empty($email)) {
        echo json_encode([
            "status" => "error",
            "message" => "Email is required."
        ]);
        exit;
    }

    // Check if user exists
    $stmt = $conn->prepare("SELECT name FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($name);
    $stmt->fetch();
    $stmt->close();

    if (!$name) {
        echo json_encode([
            "status" => "error",
            "message" => "Email not found."
        ]);
        exit;
    }

    // Generate new OTP
    $otp_code = rand(100000, 999999);
    $otp_expires_at = date("Y-m-d H:i:s", strtotime("+15 minutes"));

    // Update OTP in database
    $stmt = $conn->prepare("UPDATE users SET otp_code = ?, otp_expires_at = ? WHERE email = ?");
    $stmt->bind_param("sss", $otp_code, $otp_expires_at, $email);
    $stmt->execute();
    $stmt->close();

    // Send email
    $subject = "Your new OTP code";
    $htmlBody = '
        <html>
        <head>
            <style>
                .otp-box {
                    font-size: 24px;
                    font-weight: bold;
                    color: #ff6600;
                }
            </style>
        </head>
        <body>
            <h2>Here is your new OTP</h2>
            <p>Use the code below to verify your email:</p>
            <div class="otp-box">' . htmlspecialchars($otp_code) . '</div>
        </body>
        </html>
    ';
    $altBody = "Your new OTP is $otp_code.";

    $emailResult = sendEmail($email, $name, $subject, $htmlBody, $altBody);

    if ($emailResult === true) {
        echo json_encode([
            "status" => "success",
            "message" => "OTP resent successfully."
        ]);
    } else {
        error_log("Resend OTP failed: " . $emailResult);
        echo json_encode([
            "status" => "error",
            "message" => "Failed to resend OTP.",
            "debug" => $emailResult
        ]);
    }
}
?>

<?php
// header('Content-Type: application/json');

include '../includes/db.php'; // your database connection file
require_once '../services/email/email_service.php';




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Basic validation
    if (empty($name) || empty($email) || empty($password) || empty($role)) {
        echo json_encode([
            "status" => "error",
            "message" => "Missing fields."
        ]);
        exit;
    }


    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid email format."
        ]);
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        echo json_encode([
            "status" => "error",
            "message" => "Email already exists."
        ]);
        exit;
    }
    $stmt->close();

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Generate OTP and token
    $otp_code = rand(100000, 999999);
    $otp_expires_at = date("Y-m-d H:i:s", strtotime("+15 minutes"));
    $token = bin2hex(random_bytes(32));

    // Insert user
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role, otp_code, otp_expires_at, token) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $hashed_password, $role, $otp_code, $otp_expires_at, $token);

    if ($stmt->execute()) {
        $stmt->close();

        // Prepare email content
        $subject = "Verify your registration";
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
                <h2>Welcome to A&R Duties!</h2>
                <p>Your OTP code is:</p>
                <div class="otp-box">' . htmlspecialchars($otp_code) . '</div>
            </body>
            </html>
        ';

        //  <p>Or click below to verify:</p>
        //         <a href="http://localhost/A&RDuties/verify.php?email=' . urlencode($email) . '&token=' . urlencode($token) . '">Verify Now</a>

        // $altBody = "Your OTP is $otp_code. Visit: http://localhost/A&RDuties/verify.php?email=$email&token=$token";
        $altBody = "Your OTP is $otp_code. ";

        $emailResult = sendEmail($email, $name, $subject, $htmlBody, $altBody);

        if ($emailResult === true) {
            echo json_encode([
                "status" => "success",
                "message" => "User registered successfully."
            ]);
            exit;
        } else {
            error_log("Failed to send OTP to $email: $emailResult");
            echo json_encode([
                "status" => "error",
                "message" => "Failed to send OTP.",
                "debug" => $emailResult // send error back to frontend
            ]);
            exit;
        }

    } else {
        $stmt->close();
        echo json_encode([
            "status" => "error",
            "message" => "Failed to register user."
        ]);
        exit;
    }
}
?>

<?php
session_start();
include '../includes/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo json_encode([
            "status" => "error",
            "message" => "Email and password are required."
        ]);
        exit;
    }

    $stmt = $conn->prepare("SELECT id, name, password, role, is_verified FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid credentials."
        ]);
        exit;
    }

    $stmt->bind_result($userId, $name, $hashedPassword, $role_type, $isVerified);
    $stmt->fetch();
    $stmt->close();

    if (!password_verify($password, $hashedPassword)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid credentials."
        ]);
        exit;
    }

    if (!$isVerified) {
        echo json_encode([
            "status" => "verify",
            "message" => "Please verify your email before logging in."
        ]);
        exit;
    }

    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['role_type'] = $role_type;

    echo json_encode([
        "status" => "success",
        "message" => "Login successful!"
    ]);
    exit;
}
?>

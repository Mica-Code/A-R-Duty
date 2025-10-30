<?php
require '../includes/db.php';
session_start();

$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) {
    echo json_encode(['error' => 'User not logged in']);
    exit;
}

$limit = 20;
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

$stmt = $conn->prepare("SELECT * FROM ai_chats WHERE user_id = ? ORDER BY id DESC LIMIT ? OFFSET ?");
$stmt->bind_param("iii", $user_id, $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

$history = [];
while ($row = $result->fetch_assoc()) {
    $history[] = $row;
}

$stmt->close();

echo json_encode(array_reverse($history));
?>

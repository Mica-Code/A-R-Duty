<?php
// chat.php
// header('Content-Type: application/json');
require '../includes/db.php';
require '../includes/config.php';

session_start();
$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) {
  echo json_encode(['error' => 'User not logged in']);
  exit;
}

$data = json_decode(file_get_contents('php://input'), true);
$user_message = trim($data['message'] ?? '');

if (empty($user_message)) {
  echo json_encode(['error' => 'Message is empty']);
  exit;
}

// 1️⃣ Save user message
$stmt = $conn->prepare("INSERT INTO ai_chats (user_id, role, message) VALUES (?, 'user', ?)");
$stmt->execute([$user_id, $user_message]);

// 2️⃣ Get recent chat history (last 10 messages)
$stmt = $conn->prepare("SELECT role, message FROM ai_chats WHERE user_id = ? ORDER BY id DESC LIMIT 10");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$rows = [];
while ($row = $result->fetch_assoc()) {
  $rows[] = $row;
}
$rows = array_reverse($rows);

// 3️⃣ Build messages array for API
$messages = [];
foreach ($rows as $r) {
  $messages[] = [
    'role' => $r['role'],
    'content' => $r['message']
  ];
}

// 4️⃣ Call OpenAI API
$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    'Content-Type: application/json',
    'Authorization: Bearer ' . OPENAI_API_KEY
  ],
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => json_encode([
    'model' => 'gpt-4o-mini', // or 'gpt-5' if not available
    'messages' => $messages,
  ]),
]);
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);
$assistant_reply = $result['choices'][0]['message']['content'] ?? 'Sorry, something went wrong.';

// 5️⃣ Save assistant reply
$stmt = $conn->prepare("INSERT INTO ai_chats (user_id, role, message) VALUES (?, 'assistant', ?)");
$stmt->execute([$user_id, $assistant_reply]);

echo json_encode(['reply' => $assistant_reply]);
?>
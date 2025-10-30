<?php
require_once '../auth/auth.php';
$title = "Dashboard";
include '../includes/header.php';
?>

<div class="min-h-screen flex flex-col">

    <div class="flex-1 pt-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6">

      <?php include '../includes/sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 bg-white/5 border border-white/10 rounded-lg p-6 text-white">
        <h1 class="text-2xl font-bold mb-4">Welcome back, <?= htmlspecialchars($_SESSION['user_name'] ?? 'Artist') ?> 👋</h1>
        <p class="text-gray-400">Here’s a quick overview of your activity and tools.</p>

        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <div class="bg-white/10 p-4 rounded-lg">🎤 Profile Status</div>
            <div class="bg-white/10 p-4 rounded-lg">💳 Subscription</div>
            <div class="bg-white/10 p-4 rounded-lg">📈 Campaign Stats</div>
        </div>
        </main>

    </div>
    </div>

</div>



<?php include '../includes/footer.php'; ?>

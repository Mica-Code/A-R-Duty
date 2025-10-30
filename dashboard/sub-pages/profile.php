<?php
ob_start();
$title = "Profile";
include '../../auth/auth.php'; // Protect the page
include '../../includes/header.php';

$user_id = $_SESSION['user_id'] ?? null;
$role_type = $_SESSION['role_type'] ?? null;

if (!$user_id || !$role_type) {
    echo "User not found. User ID: " . $user_id . " Role Type: " . $role_type;
    exit;
}

// Connect to DB
require '../../includes/db.php';

// Get general user info
// $stmt = $db->prepare("SELECT name, email FROM users WHERE id = ?");
// $stmt->execute([$user_id]);
// $user = $stmt->fetch();

// Get role-specific info
// $roleData = [];
// switch ($role_type) {
//     case 'artist':
//         $stmt = $db->prepare("SELECT bio, genre, social_links FROM artists WHERE user_id = ?");
//         break;
//     case 'manager':
//         $stmt = $db->prepare("SELECT agency_name, portfolio_url, contact_number FROM managers WHERE user_id = ?");
//         break;
//     case 'label':
//         $stmt = $db->prepare("SELECT label_name, roster_size, website FROM labels WHERE user_id = ?");
//         break;
//     case 'a&r':
//         $stmt = $db->prepare("SELECT company, focus_area FROM a_r WHERE user_id = ?");
//         break;
//     default:
//         $stmt = null;
// }

// if ($stmt) {
//     $stmt->execute([$user_id]);
//     $roleData = $stmt->fetch();
// }

ob_end_flush();
?>

<div class="min-h-screen flex flex-col">
    <div class="flex-1 pt-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6">
            <?php include '../../includes/sidebar.php'; ?>

            <!-- Profile Banner Section -->
            <div class="relative w-full h-48 md:h-64 rounded-lg overflow-hidden bg-white/5 border border-white/10">
            <img src="path/to/banner.jpg" alt="Banner Image" class="w-full h-full object-cover">
            
            <!-- Edit Banner Icon -->
            <a href="edit-banner.php" class="absolute top-2 right-2 bg-black/50 p-2 rounded-full hover:bg-black/70">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3a2 2 0 01.586-1.414z" />
                </svg>
            </a>
            </div>

            <!-- Profile Image Section -->
            <div class="relative -mt-16 ml-4 w-32 h-32 rounded-full border-4 border-white bg-white/10 overflow-hidden">
            <img src="path/to/profile.jpg" alt="Profile Image" class="w-full h-full object-cover rounded-full">
            
            <!-- Edit Profile Icon -->
            <a href="edit-profile-image.php" class="absolute bottom-2 right-2 bg-black/50 p-2 rounded-full hover:bg-black/70">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3a2 2 0 01.586-1.414z" />
                </svg>
            </a>
            </div>


            <!-- Artist Details Section -->
            <div class="mt-8 bg-white/5 border border-white/10 rounded-lg p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold">Artist Details</h2>
                <a href="edit-details.php" class="text-white hover:text-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3a2 2 0 01.586-1.414z" />
                </svg>
                </a>
            </div>

            <div class="space-y-3 text-sm text-gray-300">
                <div><strong>Stage Name:</strong> Viral Vibes</div>
                <div><strong>Short Title:</strong> Best Pop Artist</div>
                <div><strong>Genre:</strong> Afrobeats</div>
                <div><strong>Location:</strong> Lagos, Nigeria</div>
                <div><strong>Status:</strong> Available</div>
                <div><strong>Bio:</strong> Passionate artist blending Afro rhythms with global sounds.</div>
                <div><strong>Socials:</strong></div>
                <ul class="ml-4 list-disc">
                <li>Instagram: @viralvibes</li>
                <li>Spotify: spotify.com/viralvibes</li>
                <li>YouTube Music: youtube.com/viralvibes</li>
                </ul>
            </div>
            </div>




            <!-- Uploaded Songs Section -->
            <div class="mt-8 bg-white/5 border border-white/10 rounded-lg p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold">Uploaded Songs</h2>
                <a href="upload-song.php" class="text-white hover:text-orange-500 text-sm">+ Add Song</a>
            </div>

            <div class="space-y-4">
                <!-- Example Song Item -->
                <div class="flex items-center justify-between bg-white/10 p-3 rounded-md">
                <div>
                    <div class="font-medium">Vibes in Motion</div>
                    <div class="text-sm text-gray-400">Uploaded: Oct 10, 2025</div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="https://audiomack.com/viralvibes/song/vibes-in-motion" target="_blank" class="text-orange-400 hover:underline text-sm">Play</a>
                    <a href="edit-song.php?id=1" class="text-white hover:text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3a2 2 0 01.586-1.414z" />
                    </svg>
                    </a>
                    <a href="delete-song.php?id=1" class="text-red-400 hover:text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </a>
                </div>
                </div>
                <!-- Repeat for each song -->
            </div>
            </div>




            <!-- Profile Details Section -->
            <!-- <div class="mt-8 space-y-4">
                <h2 class="text-white text-lg font-semibold">Profile Details</h2>
                <div class="flex flex-col space-y-2">
                    <div class="flex items-center justify-between">
                    <span class="text-white text-sm font-medium">Name:</span>
                    <span class="text-white text-sm font-medium"><?= htmlspecialchars($user['name']) ?></span>
                    </div>
                    <div class="flex items-center justify-between">
                    <span class="text-white text-sm font-medium">Email:</span>
                    <span class="text-white text-sm font-medium"><?= htmlspecialchars($user['email']) ?></span>
                    </div>
                    <div class="flex items-center justify-between">
                    <span class="text-white text-sm font-medium">Role:</span>
                    <span class="text-white text-sm font-medium"><?= htmlspecialchars($role_type) ?></span>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
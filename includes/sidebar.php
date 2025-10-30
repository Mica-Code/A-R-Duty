        <!-- Mobile Toggle Button -->
        <button id="toggleSidebar" class="md:hidden mb-4 px-4 py-2 bg-orange-600 text-white rounded-md w-fit">
        ☰ Dashboard Menu
        </button>

        <!-- Sidebar -->
        <aside id="sidebarMenu" class="w-full md:w-64 bg-white/5 border border-white/10 rounded-lg p-4 space-y-4 hidden md:block">
        <h2 class="text-white text-lg font-semibold mb-2">My Dashboard</h2>
        <nav class="flex flex-col space-y-2 text-sm text-white">
            <a href="dashboard.php" class="hover:bg-white/10 px-3 py-2 rounded-md">Overview</a>
            <a href="profile.php" class="hover:bg-white/10 px-3 py-2 rounded-md">Profile</a>
            <a href="reset-password.php" class="hover:bg-white/10 px-3 py-2 rounded-md">Reset Password</a>
            <a href="payments.php" class="hover:bg-white/10 px-3 py-2 rounded-md">Payments</a>
            <a href="settings.php" class="hover:bg-white/10 px-3 py-2 rounded-md">Settings</a>
            <a href="logout.php" class="hover:bg-white/10 px-3 py-2 rounded-md text-red-400">Sign Out</a>
        </nav>
        </aside>



        <!-- Sidebar Toggle Script -->
        <script>
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebarMenu');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
        </script>
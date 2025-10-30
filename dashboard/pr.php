<?php
require_once '../auth/auth.php';
$title = "Public Relations (PR) Suite";
include '../includes/header.php';

?>

    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">Public Relations (PR)
                        Suite</span></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Manage your public image, connect with media, and build
                    your brand with our integrated PR tools.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div style="opacity: 1; transform: none;"><img class="rounded-2xl shadow-2xl neon-glow" alt="PR outreach"
                        src="https://images.unsplash.com/photo-1587593203323-99936a43b2cf"></div>
                <div class="space-y-6" style="opacity: 1; transform: none;">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-6 h-6 text-orange-400">
                                <path d="m12 19 7-7 3 3-7 7-3-3z"></path>
                                <path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="m2 2 7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg></div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Press Release Crafting</h3>
                            <p class="text-gray-400">AI-assisted writing to create compelling press releases that get
                                noticed.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-6 h-6 text-orange-400">
                                <path d="m22 2-7 20-4-9-9-4Z"></path>
                                <path d="M22 2 11 13"></path>
                            </svg></div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Targeted Distribution</h3>
                            <p class="text-gray-400">Reach journalists, bloggers, and influencers in your genre.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-6 h-6 text-orange-400">
                                <path d="M4 11a9 9 0 0 1 9 9"></path>
                                <path d="M4 4a16 16 0 0 1 16 16"></path>
                                <circle cx="5" cy="19" r="1"></circle>
                            </svg></div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Media Monitoring</h3>
                            <p class="text-gray-400">Track your mentions and measure the impact of your PR campaigns.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-6 h-6 text-orange-400">
                                <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                                <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                <line x1="12" x2="12" y1="19" y2="22"></line>
                            </svg></div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Interview Prep</h3>
                            <p class="text-gray-400">Get AI-generated talking points and practice questions for interviews.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="font-semibold tracking-tight text-2xl">Start Your PR Campaign</h3>
                        <p class="text-sm text-muted-foreground">Get your music in front of the right people.</p>
                    </div>
                    <div class="p-6 pt-0 text-center"><button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800">Create
                            Press Kit</button></div>
                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>
<?php
    require_once '../auth/auth.php';
    $title = "Marketing Campaign";
    include '../includes/header.php';

?>
    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">AI Marketing Campaigns</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Design, launch, and manage data-driven marketing
                    campaigns to maximize your music's reach.</p>
            </div>
            <div style="opacity: 1; transform: none;">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 mb-12">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="font-semibold tracking-tight flex items-center gap-2 text-2xl"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-6 h-6 text-orange-400">
                                <path d="m3 11 18-5v12L3 14v-3z"></path>
                                <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                            </svg>Campaign Builder</h3>
                        <p class="text-sm text-muted-foreground">Our AI-powered builder guides you through creating a
                            professional marketing campaign.</p>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-white/5 border-white/10">
                                <div class="space-y-1.5 p-6 flex flex-row items-center gap-4"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-orange-400">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white">Define Objectives</h3>
                                    </div>
                                </div>
                                <div class="p-6 pt-0">
                                    <p class="text-sm text-gray-400">Set clear goals for your campaign (e.g., increase
                                        streams, sell tickets).</p>
                                </div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-white/5 border-white/10">
                                <div class="space-y-1.5 p-6 flex flex-row items-center gap-4"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-orange-400">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white">Identify Target Audience
                                        </h3>
                                    </div>
                                </div>
                                <div class="p-6 pt-0">
                                    <p class="text-sm text-gray-400">Use AI analytics to find your ideal listener
                                        demographic.</p>
                                </div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-white/5 border-white/10">
                                <div class="space-y-1.5 p-6 flex flex-row items-center gap-4"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-orange-400">
                                        <path d="m3 11 18-5v12L3 14v-3z"></path>
                                        <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                                    </svg>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white">Craft Your Message</h3>
                                    </div>
                                </div>
                                <div class="p-6 pt-0">
                                    <p class="text-sm text-gray-400">Develop a compelling story and visual identity for your
                                        music.</p>
                                </div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-white/5 border-white/10">
                                <div class="space-y-1.5 p-6 flex flex-row items-center gap-4"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-orange-400">
                                        <line x1="12" x2="12" y1="20" y2="10"></line>
                                        <line x1="18" x2="18" y1="20" y2="4"></line>
                                        <line x1="6" x2="6" y1="20" y2="16"></line>
                                    </svg>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white">Select Channels</h3>
                                    </div>
                                </div>
                                <div class="p-6 pt-0">
                                    <p class="text-sm text-gray-400">Choose the best platforms to reach your audience (e.g.,
                                        TikTok, Spotify, Instagram).</p>
                                </div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-white/5 border-white/10">
                                <div class="space-y-1.5 p-6 flex flex-row items-center gap-4"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-orange-400">
                                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                        <line x1="16" x2="16" y1="2" y2="6"></line>
                                        <line x1="8" x2="8" y1="2" y2="6"></line>
                                        <line x1="3" x2="21" y1="10" y2="10"></line>
                                    </svg>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white">Create a Timeline</h3>
                                    </div>
                                </div>
                                <div class="p-6 pt-0">
                                    <p class="text-sm text-gray-400">Plan your content calendar and release schedule.</p>
                                </div>
                            </div>
                            <div class="rounded-lg border text-card-foreground shadow-sm bg-white/5 border-white/10">
                                <div class="space-y-1.5 p-6 flex flex-row items-center gap-4"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-orange-400">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white">Set a Budget</h3>
                                    </div>
                                </div>
                                <div class="p-6 pt-0">
                                    <p class="text-sm text-gray-400">Allocate funds for ads, PR, and content creation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-8"><button id="openCampaignModal"
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800" type="button">
                                Start New Campaign
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Campaign Modal -->
    <div id="campaignModal" class="fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-4 hidden">
        <div class="modal-content bg-gray-900 border border-orange-500/30 rounded-2xl shadow-xl w-full max-w-lg p-6 relative text-white">
            <button id="closeCampaignModal" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
            <h2 class="text-2xl font-bold mb-4 text-orange-400">Start a New Campaign</h2>
            <form class="space-y-4">
                <div>
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="campaign_name">Campaign Name</label>
                    <input class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-gray-800 border-gray-700"
                        id="campaign_name" name="campaign_name">
                </div>
                <div>
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="artist_name">Artist Name</label>
                    <input class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-gray-800 border-gray-700"
                        id="artist_name" name="artist_name">
                </div>
                <div>
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="song_title">Song/Project Title (Optional)</label>
                    <input class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-gray-800 border-gray-700"
                        id="song_title" name="song_title">
                </div>
                <div>
                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="goal">Primary Goal (Optional)</label>
                    <input class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-gray-800 border-gray-700"
                        id="goal" name="goal" placeholder="e.g., Increase Spotify monthly listeners">
                </div>
                <div class="flex justify-end pt-4">
                    <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800"
                        type="submit">
                        Create Campaign
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php include '../includes/footer.php'; ?>
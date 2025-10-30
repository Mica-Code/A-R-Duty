<?php
require_once '../auth/auth.php';
$title = "Rollout Plan";
include '../includes/header.php';
?>
    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">AI-Powered Rollout Plan</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Generate a strategic, step-by-step rollout plan for your
                    next release, from pre-launch to post-release.</p>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 mb-12">
                <div class="flex flex-col space-y-1.5 p-6">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Create Your Plan</h3>
                    <p class="text-sm text-muted-foreground">Enter the details of your release to generate a custom plan.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <form class="grid md:grid-cols-2 gap-6 items-end">
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="artistName">Artist Name</label><input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                id="artistName" placeholder="e.g., The Midnight Bloom" value=""></div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="songTitle">Song / Project Title</label><input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                id="songTitle" placeholder="e.g., Echoes in the Static" value=""></div>
                        <div class="md:col-span-2 text-center"><button
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800"
                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <path
                                        d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z">
                                    </path>
                                    <path d="M5 3v4"></path>
                                    <path d="M19 17v4"></path>
                                    <path d="M3 5h4"></path>
                                    <path d="M17 19h4"></path>
                                </svg>Generate Your Plan</button></div>
                    </form>
                </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 mb-12">
                <div class="flex flex-col space-y-1.5 p-6">
                    <h3 class="font-semibold tracking-tight flex items-center gap-2 text-2xl"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-6 h-6 text-orange-400">
                            <path d="M12 13V2l8 4-8 4"></path>
                            <path d="M20.55 10.23A9 9 0 1 1 8 4.94"></path>
                            <path d="M8 10a5 5 0 1 0 8.9 2.02"></path>
                        </svg>Your Release Timeline</h3>
                    <p class="text-sm text-muted-foreground">A sample timeline for a release.</p>
                </div>
                <div class="p-6 pt-0">
                    <div
                        class="relative pl-6 before:absolute before:left-6 before:top-0 before:bottom-0 before:w-0.5 before:bg-white/20">
                        <div class="relative pl-8 py-4" style="opacity: 1; transform: none;">
                            <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full flex items-center justify-center
                                            bg-green-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3 text-white"><polyline points="20 6 9 17 4 12"></polyline></svg></div><p class="font-semibold text-white">Week -8: Finalize Master Recordings</p><p class="text-sm text-gray-400">Submit final audio master for distribution.</p></div><div class="relative pl-8 py-4" style="opacity: 1; transform: none;"><div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full flex items-center justify-center
                                            bg-green-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3 text-white"><polyline points="20 6 9 17 4 12"></polyline></svg></div><p class="font-semibold text-white">Week -6: Album Artwork &amp; Photoshoot</p><p class="text-sm text-gray-400">Complete all visual assets for the campaign.</p></div><div class="relative pl-8 py-4" style="opacity: 1; transform: none;"><div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full flex items-center justify-center
                                            bg-orange-500 animate-pulse"></div><p class="font-semibold text-white">Week -4: First Single Release + Music Video</p><p class="text-sm text-gray-400">Launch the lead single and accompanying video.</p></div><div class="relative pl-8 py-4" style="opacity: 1; transform: none;"><div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full flex items-center justify-center
                                            bg-gray-500"></div><p class="font-semibold text-white">Week -2: Second Single Release + PR Push</p><p class="text-sm text-gray-400">Release follow-up single and start media outreach.</p></div><div class="relative pl-8 py-4" style="opacity: 1; transform: none;"><div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full flex items-center justify-center
                                            bg-gray-500"></div><p class="font-semibold text-white">Week 0: Album Release Day</p><p class="text-sm text-gray-400">Full album is live on all platforms.</p></div><div class="relative pl-8 py-4" style="opacity: 1; transform: none;"><div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full flex items-center justify-center
                                            bg-gray-500"></div><p class="font-semibold text-white">Week 2: Release Tour Starts</p><p class="text-sm text-gray-400">Begin live performances to support the album.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<?php include '../includes/footer.php'; ?>
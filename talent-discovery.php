<?php 

$title= "Talent Discovery";

include 'includes/header.php'; 

?>
    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">Talent Discovery</span></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">Discover emerging artists and hidden gems with our
                    AI-powered talent scouting platform</p>
            </div>


            <!-- Search Bar -->
            <div class="glass-effect rounded-xl p-6 mb-8" style="opacity: 1; transform: none;">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg><input
                            class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10 bg-white/5 border-white/20 text-white placeholder:text-gray-400"
                            placeholder="Search artists, genres, or locations..." value=""></div><button
                        class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-10 px-4 py-2 border-white/20 hover:bg-white/10"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4 mr-2">
                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                        </svg>Filters</button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" style="opacity: 1; transform: none;">
                <div class="glass-effect rounded-xl p-6 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 mx-auto mb-3 text-orange-400">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <div class="text-2xl font-bold text-white mb-1">2,500+</div>
                    <div class="text-sm text-gray-400">Artists Discovered</div>
                </div>
                <div class="glass-effect rounded-xl p-6 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 mx-auto mb-3 text-green-400">
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                        <polyline points="16 7 22 7 22 13"></polyline>
                    </svg>
                    <div class="text-2xl font-bold text-white mb-1">85%</div>
                    <div class="text-sm text-gray-400">Success Rate</div>
                </div>
                <div class="glass-effect rounded-xl p-6 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 mx-auto mb-3 text-orange-400">
                        <path d="M9 18V5l12-2v13"></path>
                        <circle cx="6" cy="18" r="3"></circle>
                        <circle cx="18" cy="16" r="3"></circle>
                    </svg>
                    <div class="text-2xl font-bold text-white mb-1">50+</div>
                    <div class="text-sm text-gray-400">Genres Covered</div>
                </div>
            </div>

            <!-- Artist Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3"><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12"><img
                                            class="aspect-square h-full w-full"
                                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=Luna Martinez"></span>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white flex items-center gap-2">
                                            Luna Martinez<div
                                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30 text-xs">
                                                Trending</div>
                                        </h3>
                                        <p class="text-sm text-gray-400">Pop • Los Angeles, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-0"><img class="w-full h-40 object-cover rounded-lg mb-4"
                                alt="Luna Martinez performance"
                                src="https://images.unsplash.com/photo-1694791306943-f8a940731145">
                            <p class="text-gray-300 text-sm mb-4">Rising pop sensation with viral TikTok hits</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Viral</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Pop</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Social Media</div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-sm text-gray-400"><span class="font-semibold text-white">125K</span>
                                    followers</div>
                            </div>
                            <div class="flex gap-2"><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 rounded-md px-3 flex-1 bg-orange-600 hover:bg-orange-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>Listen</button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                        </path>
                                    </svg></button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3"><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12"><img
                                            class="aspect-square h-full w-full"
                                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=The Midnight Collective"></span>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white flex items-center gap-2">
                                            The Midnight Collective</h3>
                                        <p class="text-sm text-gray-400">Indie Rock • Austin, TX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-0"><img class="w-full h-40 object-cover rounded-lg mb-4"
                                alt="The Midnight Collective performance"
                                src="https://images.unsplash.com/photo-1694791306943-f8a940731145">
                            <p class="text-gray-300 text-sm mb-4">Indie rock band with unique sound and growing fanbase</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Indie</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Rock</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Live Performance</div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-sm text-gray-400"><span class="font-semibold text-white">89K</span>
                                    followers</div>
                            </div>
                            <div class="flex gap-2"><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 rounded-md px-3 flex-1 bg-orange-600 hover:bg-orange-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>Listen</button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                        </path>
                                    </svg></button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3"><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12"><img
                                            class="aspect-square h-full w-full"
                                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=DJ Neon"></span>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white flex items-center gap-2">
                                            DJ Neon<div
                                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30 text-xs">
                                                Trending</div>
                                        </h3>
                                        <p class="text-sm text-gray-400">Electronic • Miami, FL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-0"><img class="w-full h-40 object-cover rounded-lg mb-4"
                                alt="DJ Neon performance"
                                src="https://images.unsplash.com/photo-1694791306943-f8a940731145">
                            <p class="text-gray-300 text-sm mb-4">Electronic music producer with festival experience</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    EDM</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Festival</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Producer</div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-sm text-gray-400"><span class="font-semibold text-white">200K</span>
                                    followers</div>
                            </div>
                            <div class="flex gap-2"><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 rounded-md px-3 flex-1 bg-orange-600 hover:bg-orange-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>Listen</button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                        </path>
                                    </svg></button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3"><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12"><img
                                            class="aspect-square h-full w-full"
                                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah Chen"></span>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white flex items-center gap-2">
                                            Sarah Chen</h3>
                                        <p class="text-sm text-gray-400">R&amp;B • Atlanta, GA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-0"><img class="w-full h-40 object-cover rounded-lg mb-4"
                                alt="Sarah Chen performance"
                                src="https://images.unsplash.com/photo-1694791306943-f8a940731145">
                            <p class="text-gray-300 text-sm mb-4">Soulful R&amp;B artist with powerful vocals</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    R&amp;B</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Soul</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Vocals</div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-sm text-gray-400"><span class="font-semibold text-white">67K</span>
                                    followers</div>
                            </div>
                            <div class="flex gap-2"><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 rounded-md px-3 flex-1 bg-orange-600 hover:bg-orange-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>Listen</button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                        </path>
                                    </svg></button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3"><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12"><img
                                            class="aspect-square h-full w-full"
                                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=Urban Legends"></span>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white flex items-center gap-2">
                                            Urban Legends<div
                                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30 text-xs">
                                                Trending</div>
                                        </h3>
                                        <p class="text-sm text-gray-400">Hip Hop • New York, NY</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-0"><img class="w-full h-40 object-cover rounded-lg mb-4"
                                alt="Urban Legends performance"
                                src="https://images.unsplash.com/photo-1694791306943-f8a940731145">
                            <p class="text-gray-300 text-sm mb-4">Hip hop duo with street credibility and lyrical prowess
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Hip Hop</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Rap</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Lyrics</div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-sm text-gray-400"><span class="font-semibold text-white">156K</span>
                                    followers</div>
                            </div>
                            <div class="flex gap-2"><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 rounded-md px-3 flex-1 bg-orange-600 hover:bg-orange-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>Listen</button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                        </path>
                                    </svg></button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-3"><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12"><img
                                            class="aspect-square h-full w-full"
                                            src="https://api.dicebear.com/7.x/avataaars/svg?seed=Acoustic Dreams"></span>
                                    <div>
                                        <h3 class="font-semibold tracking-tight text-lg text-white flex items-center gap-2">
                                            Acoustic Dreams</h3>
                                        <p class="text-sm text-gray-400">Folk • Nashville, TN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-0"><img class="w-full h-40 object-cover rounded-lg mb-4"
                                alt="Acoustic Dreams performance"
                                src="https://images.unsplash.com/photo-1694791306943-f8a940731145">
                            <p class="text-gray-300 text-sm mb-4">Folk duo creating heartfelt acoustic melodies</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Folk</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Acoustic</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-white/20 text-gray-300">
                                    Storytelling</div>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-sm text-gray-400"><span class="font-semibold text-white">43K</span>
                                    followers</div>
                            </div>
                            <div class="flex gap-2"><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-9 rounded-md px-3 flex-1 bg-orange-600 hover:bg-orange-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 mr-2">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>Listen</button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                        </path>
                                    </svg></button><button
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-9 rounded-md px-3 border-white/20 hover:bg-white/10"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                        <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 

include 'includes/footer.php'; 

?>

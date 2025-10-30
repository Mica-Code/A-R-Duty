<?php
require_once '../auth/auth.php';

$title = "Legal Services";
include '../includes/header.php';


?>

    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">Legal Services</span></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">Protect your music career with expert legal guidance
                    from experienced entertainment lawyers specializing in the music industry</p>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;"><img
                    class="w-full max-w-4xl mx-auto rounded-2xl shadow-2xl neon-glow" alt="Legal consultation meeting"
                    src="https://images.unsplash.com/photo-1675270714610-11a5cadcc7b3"></div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12"><span class="gradient-text">Legal
                        Services</span></h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group h-full">
                            <div class="flex flex-col space-y-1.5 p-6 text-center">
                                <div
                                    class="w-16 h-16 mx-auto mb-4 rounded-xl bg-gradient-to-r from-orange-500 to-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-white">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                        </path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" x2="8" y1="13" y2="13"></line>
                                        <line x1="16" x2="8" y1="17" y2="17"></line>
                                        <line x1="10" x2="8" y1="9" y2="9"></line>
                                    </svg></div>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Contract Review</h3>
                                <p class="text-sm text-gray-400">Professional review of recording, publishing, and
                                    management contracts</p>
                                <div class="text-lg font-semibold text-orange-400">From $299</div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-2 mb-4">
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Record Label Contracts</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Publishing Agreements</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Management Deals</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Distribution Contracts</li>
                                </ul><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Get
                                    Quote</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group h-full">
                            <div class="flex flex-col space-y-1.5 p-6 text-center">
                                <div
                                    class="w-16 h-16 mx-auto mb-4 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-white">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                                    </svg></div>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Copyright Protection</h3>
                                <p class="text-sm text-gray-400">Comprehensive copyright registration and intellectual
                                    property protection</p>
                                <div class="text-lg font-semibold text-orange-400">From $199</div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-2 mb-4">
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Copyright Registration</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Trademark Filing</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>IP Strategy</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Infringement Protection</li>
                                </ul><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Get
                                    Quote</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group h-full">
                            <div class="flex flex-col space-y-1.5 p-6 text-center">
                                <div
                                    class="w-16 h-16 mx-auto mb-4 rounded-xl bg-gradient-to-r from-red-500 to-orange-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-white">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg></div>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Business Formation</h3>
                                <p class="text-sm text-gray-400">Legal entity setup and business structure optimization</p>
                                <div class="text-lg font-semibold text-orange-400">From $499</div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-2 mb-4">
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>LLC Formation</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Corporation Setup</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Partnership Agreements</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Tax Optimization</li>
                                </ul><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Get
                                    Quote</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group h-full">
                            <div class="flex flex-col space-y-1.5 p-6 text-center">
                                <div
                                    class="w-16 h-16 mx-auto mb-4 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-white">
                                        <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                        <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                        <path d="M7 21h10"></path>
                                        <path d="M12 3v18"></path>
                                        <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                    </svg></div>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Dispute Resolution</h3>
                                <p class="text-sm text-gray-400">Professional mediation and legal representation for
                                    industry disputes</p>
                                <div class="text-lg font-semibold text-orange-400">From $399</div>
                            </div>
                            <div class="p-6 pt-0">
                                <ul class="space-y-2 mb-4">
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Contract Disputes</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Royalty Issues</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Band Breakups</li>
                                    <li class="text-sm text-gray-300 flex items-center"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-4 h-4 text-green-400 mr-2 flex-shrink-0">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>Label Conflicts</li>
                                </ul><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Get
                                    Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12"><span class="gradient-text">Expert Legal
                        Team</span></h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6 text-center"><span
                                    class="relative flex shrink-0 overflow-hidden rounded-full w-20 h-20 mx-auto mb-4"><img
                                        class="aspect-square h-full w-full"
                                        src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah Johnson"></span>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Sarah Johnson</h3>
                                <p class="text-sm text-gray-400">Entertainment Law</p>
                                <div class="flex items-center justify-center gap-1 text-yellow-400"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 fill-current">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg><span class="text-sm font-semibold">4.9</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="space-y-2 mb-4 text-sm text-gray-300">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-orange-400">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>15 years experience</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-green-400">
                                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="M7 21h10"></path>
                                            <path d="M12 3v18"></path>
                                            <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                        </svg>500+ cases handled</div>
                                    <div class="text-xs text-gray-400">Harvard Law School • Los Angeles, CA</div>
                                </div>
                                <p class="text-sm text-gray-300 mb-4">Specializes in record label negotiations and artist
                                    contracts</p><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-orange-600 hover:bg-orange-700">Consult
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6 text-center"><span
                                    class="relative flex shrink-0 overflow-hidden rounded-full w-20 h-20 mx-auto mb-4"><img
                                        class="aspect-square h-full w-full"
                                        src="https://api.dicebear.com/7.x/avataaars/svg?seed=Michael Chen"></span>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Michael Chen</h3>
                                <p class="text-sm text-gray-400">Intellectual Property</p>
                                <div class="flex items-center justify-center gap-1 text-yellow-400"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 fill-current">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg><span class="text-sm font-semibold">4.8</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="space-y-2 mb-4 text-sm text-gray-300">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-orange-400">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>12 years experience</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-green-400">
                                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="M7 21h10"></path>
                                            <path d="M12 3v18"></path>
                                            <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                        </svg>350+ cases handled</div>
                                    <div class="text-xs text-gray-400">Stanford Law School • New York, NY</div>
                                </div>
                                <p class="text-sm text-gray-300 mb-4">Expert in copyright law and trademark protection</p>
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-orange-600 hover:bg-orange-700">Consult
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6 text-center"><span
                                    class="relative flex shrink-0 overflow-hidden rounded-full w-20 h-20 mx-auto mb-4"><img
                                        class="aspect-square h-full w-full"
                                        src="https://api.dicebear.com/7.x/avataaars/svg?seed=Emily Rodriguez"></span>
                                <h3 class="font-semibold tracking-tight text-xl text-white">Emily Rodriguez</h3>
                                <p class="text-sm text-gray-400">Business Law</p>
                                <div class="flex items-center justify-center gap-1 text-yellow-400"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 fill-current">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg><span class="text-sm font-semibold">4.9</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="space-y-2 mb-4 text-sm text-gray-300">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-orange-400">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>10 years experience</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-green-400">
                                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="M7 21h10"></path>
                                            <path d="M12 3v18"></path>
                                            <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                        </svg>280+ cases handled</div>
                                    <div class="text-xs text-gray-400">Columbia Law School • Nashville, TN</div>
                                </div>
                                <p class="text-sm text-gray-300 mb-4">Focuses on music business formation and tax strategy
                                </p><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-orange-600 hover:bg-orange-700">Consult
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6 text-center"><span
                                    class="relative flex shrink-0 overflow-hidden rounded-full w-20 h-20 mx-auto mb-4"><img
                                        class="aspect-square h-full w-full"
                                        src="https://api.dicebear.com/7.x/avataaars/svg?seed=David Thompson"></span>
                                <h3 class="font-semibold tracking-tight text-xl text-white">David Thompson</h3>
                                <p class="text-sm text-gray-400">Contract Law</p>
                                <div class="flex items-center justify-center gap-1 text-yellow-400"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 fill-current">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg><span class="text-sm font-semibold">5</span></div>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="space-y-2 mb-4 text-sm text-gray-300">
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-orange-400">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>18 years experience</div>
                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-green-400">
                                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="M7 21h10"></path>
                                            <path d="M12 3v18"></path>
                                            <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                        </svg>600+ cases handled</div>
                                    <div class="text-xs text-gray-400">Yale Law School • Los Angeles, CA</div>
                                </div>
                                <p class="text-sm text-gray-300 mb-4">Veteran entertainment lawyer with major label
                                    experience</p><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-orange-600 hover:bg-orange-700">Consult
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12"><span class="gradient-text">Legal
                        Resources</span></h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30">
                                        Templates</div><span class="text-lg font-semibold text-green-400">Free</span>
                                </div>
                                <h3 class="font-semibold tracking-tight text-lg text-white">Music Industry Contract
                                    Templates</h3>
                                <p class="text-sm text-gray-400">Download professionally drafted contract templates</p>
                            </div>
                            <div class="p-6 pt-0"><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Download</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30">
                                        Guide</div><span class="text-lg font-semibold text-green-400">Free</span>
                                </div>
                                <h3 class="font-semibold tracking-tight text-lg text-white">Copyright Registration Guide
                                </h3>
                                <p class="text-sm text-gray-400">Step-by-step guide to protecting your intellectual property
                                </p>
                            </div>
                            <div class="p-6 pt-0"><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Download</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30">
                                        Consultation</div><span class="text-lg font-semibold text-green-400">$150</span>
                                </div>
                                <h3 class="font-semibold tracking-tight text-lg text-white">Legal Consultation</h3>
                                <p class="text-sm text-gray-400">30-minute consultation with entertainment lawyer</p>
                            </div>
                            <div class="p-6 pt-0"><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Purchase</button>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 group">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-orange-600/20 text-orange-400 border-orange-500/30">
                                        Tool</div><span class="text-lg font-semibold text-green-400">$49/month</span>
                                </div>
                                <h3 class="font-semibold tracking-tight text-lg text-white">Contract Analysis Tool</h3>
                                <p class="text-sm text-gray-400">AI-powered contract analysis and risk assessment</p>
                            </div>
                            <div class="p-6 pt-0"><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-10 px-4 py-2 w-full bg-white/10 hover:bg-white/20">Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <div class="glass-effect rounded-xl p-6 border-yellow-500/30 bg-yellow-600/10">
                    <div class="flex items-start gap-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-6 h-6 text-yellow-400 flex-shrink-0 mt-1">
                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                            <path d="M12 9v4"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                        <div>
                            <h3 class="text-lg font-semibold text-yellow-400 mb-2">Important Legal Notice</h3>
                            <p class="text-gray-300 text-sm">The music industry involves complex legal considerations.
                                Always consult with qualified entertainment lawyers before signing contracts or making
                                important business decisions. Our platform connects you with licensed professionals who can
                                provide proper legal guidance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" style="opacity: 1; transform: none;">
                <div class="glass-effect rounded-2xl p-12 neon-glow">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6"><span class="gradient-text">Protect Your Music
                            Career</span></h2>
                    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Don't navigate the complex music industry legal
                        landscape alone. Get expert guidance to protect your rights and maximize your opportunities.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center"><button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 pulse-glow"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="mr-2 w-5 h-5">
                                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                <path d="M7 21h10"></path>
                                <path d="M12 3v18"></path>
                                <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                            </svg>Free Consultation</button><button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-11 rounded-md px-8 border-white/20 hover:bg-white/10">Browse
                            Resources</button></div>
                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>
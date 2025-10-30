<?php 

$title= "Pricing";

include 'includes/header.php'; 

?>
    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">Choose Your Plan</span></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Simple, transparent pricing. No hidden fees. Choose the
                    plan that's right for you and start growing your music career today.</p>
            </div>
            <div class="flex items-center justify-center gap-4 mb-12" style="opacity: 1; transform: none;"><label
                    class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-lg text-gray-300"
                    for="billing-cycle">Monthly</label><button type="button" role="switch" aria-checked="false"
                    data-state="unchecked" value="on"
                    class="peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-orange-500 data-[state=unchecked]:bg-gray-700"
                    id="billing-cycle"><span data-state="unchecked"
                        class="pointer-events-none block h-5 w-5 rounded-full bg-white shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-5 data-[state=unchecked]:translate-x-0"></span></button><label
                    class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-lg text-gray-300"
                    for="billing-cycle">Annual</label>
                <div
                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-green-600/20 text-green-400 border-green-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-4 h-4 mr-1">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>1 month FREE!</div>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 items-stretch">
                <div class="h-full" style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 h-full flex flex-col">
                        <div class="flex flex-col space-y-1.5 p-6 text-center">
                            <h3 class="font-semibold tracking-tight text-3xl text-white">Free</h3>
                            <p class="text-gray-400 h-10">Get started and create your basic profile for free.</p>
                            <div class="my-4"><span class="text-5xl font-bold text-white">$0</span></div>
                        </div>
                        <div class="p-6 pt-0 flex flex-col flex-grow">
                            <ul class="space-y-4 mb-8 flex-grow">
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Basic Talent Profile</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Limited search for A&amp;R reps</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Submit music (1/month)</li>
                            </ul><button
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-11 rounded-md px-8 w-full mt-auto bg-white/10 hover:bg-white/20">Sign
                                Up for Free</button>
                        </div>
                    </div>
                </div>
                <div class="h-full" style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 h-full flex flex-col">
                        <div class="flex flex-col space-y-1.5 p-6 text-center">
                            <h3 class="font-semibold tracking-tight text-3xl text-white">Artist</h3>
                            <p class="text-gray-400 h-10">For emerging artists ready to get discovered.</p>
                            <div class="my-4"><span class="text-2xl text-gray-500 line-through mr-2">$29</span><span
                                    class="text-5xl font-bold text-white">$19.99</span><span
                                    class="text-gray-400">/month</span></div>
                        </div>
                        <div class="p-6 pt-0 flex flex-col flex-grow">
                            <ul class="space-y-4 mb-8 flex-grow">
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Everything in Free plan</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Professional talent profile</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Submit music (10/month)</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Profile view analytics</li>
                            </ul><button
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-11 rounded-md px-8 w-full mt-auto bg-white/10 hover:bg-white/20">Choose
                                Artist Plan</button>
                        </div>
                    </div>
                </div>
                <div class="h-full" style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 h-full flex flex-col ring-2 ring-orange-500/50">
                        <div class="flex flex-col space-y-1.5 p-6 text-center">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 w-fit self-center mb-4 bg-orange-600/20 text-orange-400 border-orange-500/30">
                                Most Popular</div>
                            <h3 class="font-semibold tracking-tight text-3xl text-white">Pro Artist</h3>
                            <p class="text-gray-400 h-10">For serious artists who want to accelerate their career.</p>
                            <div class="my-4"><span class="text-2xl text-gray-500 line-through mr-2">$59</span><span
                                    class="text-5xl font-bold text-white">$35.99</span><span
                                    class="text-gray-400">/month</span></div>
                        </div>
                        <div class="p-6 pt-0 flex flex-col flex-grow">
                            <ul class="space-y-4 mb-8 flex-grow">
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Everything in Artist plan</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Unlimited music submissions</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>AI-powered trend analytics</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Priority placement in search</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Direct messaging with A&amp;R reps</li>
                            </ul><button
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 rounded-md px-8 w-full mt-auto bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 neon-glow">Choose
                                Pro Plan</button>
                        </div>
                    </div>
                </div>
                <div class="h-full" style="opacity: 1; transform: none;">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10 hover:border-white/20 transition-all duration-300 hover:scale-105 h-full flex flex-col">
                        <div class="flex flex-col space-y-1.5 p-6 text-center">
                            <h3 class="font-semibold tracking-tight text-3xl text-white">Partners</h3>
                            <p class="text-gray-400 h-10">For labels, publishers, and industry partners.</p>
                            <div class="my-4"><span class="text-5xl font-bold text-white">Custom</span></div>
                        </div>
                        <div class="p-6 pt-0 flex flex-col flex-grow">
                            <ul class="space-y-4 mb-8 flex-grow">
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Everything in Pro Artist plan</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Manage multiple artist profiles</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Advanced talent scouting tools</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Access to legal templates</li>
                                <li class="flex items-start text-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-green-400 mr-3 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>Dedicated account manager</li>
                            </ul><button
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary-foreground h-11 rounded-md px-8 w-full mt-auto bg-white/10 hover:bg-white/20">Contact
                                Sales</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-24" style="opacity: 1; transform: none;">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12"><span class="gradient-text">Full Feature
                        Comparison</span></h2>
                <div class="glass-effect rounded-xl p-8 text-center text-gray-400">
                    <p>A detailed feature comparison table is coming soon!</p>
                    <p>For now, please refer to the feature lists in the plans above.</p>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
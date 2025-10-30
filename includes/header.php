<?php

// auth.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function getActiveClass($currentTitle, $menuTitle) {
    return $currentTitle === $menuTitle
        ? "bg-orange-600/20 text-orange-400"
        : "text-gray-300 hover:text-white hover:bg-white/10";
}



// Home 
$isHomeActive = $title == "Home" ? "bg-orange-600/20 text-orange-400" : "text-gray-300 hover:text-white hover:bg-white/10";
$isTalentDiscoveryActive = $title == "Talent Discovery" ? "bg-orange-600/20 text-orange-400" : "text-gray-300 hover:text-white hover:bg-white/10";
$isArtistDevelopmentActive = $title == "Artist Development" ? "bg-orange-600/20 text-orange-400" : "text-gray-300 hover:text-white hover:bg-white/10";
$isARMarketplaceActive = $title == "A&R Marketplace" ? "bg-orange-600/20 text-orange-400" : "text-gray-300 hover:text-white hover:bg-white/10";
$isPricingActive = $title == "Pricing" ? "bg-orange-600/20 text-orange-400" : "text-gray-300 hover:text-white hover:bg-white/10";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/A&RDuties/images/favicon.png">
    <title> <?= $title ?> - A&R DUTY | AI-Powered Music Industry Platform</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.9/dist/typography.min.css" rel="stylesheet">

        <!-- Loader -->
    <style>
        #loader-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.6); /* transparent black */
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        }

        .loader-spinner {
        width: 60px;
        height: 60px;
        border: 6px solid #ff5d00;
        border-top: 6px solid transparent;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        }

        @keyframes spin {
        to { transform: rotate(360deg); }
        }
    </style>




    
    <style>
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
        extend: {
            fontFamily: {
            sans: ['Inter', 'sans-serif'],
            },
        },
        },
        //plugins: [tailwind.typography], // 👈 this line activates prose support
    };
    </script>

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #ff5d00 0%, #ffa500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(10, 10, 20, .5);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, .1);
        }

        .neon-glow {
            box-shadow: 0 0 20px #ff5d004d, 0 0 40px #ffa50033;
        }

        .text-orange-400 {
            --tw-text-opacity: 1;
            color: rgb(251 146 60 / var(--tw-text-opacity, 1));
        }
        .text-muted-foreground {
            color: hsl(215, 20.2%, 65.1%);
        }

        .nav-link-active {
            background-color: rgba(255, 255, 255, .1);
        }
    </style>

    <!-- Style for Marketing Campaign modal -->
    <style>
        /* Modal Animations */
        @keyframes modalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes modalSlideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes modalFadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        
        @keyframes modalSlideOut {
            from { transform: translateY(0); opacity: 1; }
            to { transform: translateY(20px); opacity: 0; }
        }
        
        #campaignModal {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease-out;
        }
        
        #campaignModal.show {
            opacity: 1;
            pointer-events: auto;
            animation: modalFadeIn 0.3s ease-out;
        }
        
        #campaignModal .modal-content {
            transform: translateY(20px);
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
            opacity: 0;
        }
        
        #campaignModal.show .modal-content {
            transform: translateY(0);
            opacity: 1;
            animation: modalSlideIn 0.3s ease-out;
        }
        
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <?php if ($title == "Rollout Plan") { ?>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #ff5d00 0%, #ffa500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(10, 10, 20, .5);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, .1);
        }

        .neon-glow {
            box-shadow: 0 0 20px #ff5d004d, 0 0 40px #ffa50033;
        }

        .text-orange-400 {
            --tw-text-opacity: 1;
            color: rgb(251 146 60 / var(--tw-text-opacity, 1));
        }
        .text-muted-foreground {
            color: hsl(215, 20.2%, 65.1%);
        }
        .text-primary-foreground {
            color: #F8FAFC !important;
        }
        .bg-background{
            background-color: #020813;
            border-color: hsl(217.2, 32.6%, 17.5%);
        }
    </style>

    <?php } elseif ($title == "Marketing Campaign") { ?>
        <style>
        .gradient-text {
            background: linear-gradient(135deg, #ff5d00 0%, #ffa500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(10, 10, 20, .5);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, .1);
        }

        .neon-glow {
            box-shadow: 0 0 20px #ff5d004d, 0 0 40px #ffa50033;
        }

        .text-orange-400 {
            --tw-text-opacity: 1;
            color: rgb(251 146 60 / var(--tw-text-opacity, 1));
        }
    </style>
    <?php } elseif ($title == "Help") { ?>
      <style>
        .gradient-text {
            background: linear-gradient(135deg, #ff5d00 0%, #ffa500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(10, 10, 20, .5);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, .1);
        }

        .neon-glow {
            box-shadow: 0 0 20px #ff5d004d, 0 0 40px #ffa50033;
        }

        .text-orange-400 {
            --tw-text-opacity: 1;
            color: rgb(251 146 60 / var(--tw-text-opacity, 1));
        }

        .text-muted-foreground {
            color: hsl(215, 20.2%, 65.1%);
        }
        .text-primary-foreground {
            color: #F8FAFC !important;
        }
        .bg-background{
            background-color: #020813;
            border-color: hsl(217.2, 32.6%, 17.5%);
        }
    </style>
    <?php } ?>

    <script>
        function showLoader() {
        document.getElementById('loader-overlay').style.display = 'flex';
        }

        function hideLoader() {
        document.getElementById('loader-overlay').style.display = 'none';
        }
    </script>
</head>

<body class="bg-black text-white font-sans" style="background-color: #020617;">

    <div id="loader-overlay">
        <div class="loader-spinner"></div>
    </div>
    <!-- Particle Background -->
    <div id="particles-js" class="fixed top-0 left-0 w-full h-full -z-10"></div>
    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-effect">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-16">
                <!-- Logo -->
                <a href="/A&RDuties" class="flex-shrink-0 flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5 text-white">
                            <path d="M9 18V5l12-2v13"></path>
                            <circle cx="6" cy="18" r="3"></circle>
                            <circle cx="18" cy="16" r="3"></circle>
                        </svg>
                    </div>
                    <span class="text-xl font-bold gradient-text"
                        style="font-family: ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';">A&R
                        DUTY</span>
                </a>

                <!-- Navigation -->
                <div class="hidden md:flex flex-1 justify-center px-4">
                    <nav class="flex items-center space-x-1">
                        <a href="/A&RDuties"
                            class="inline-flex items-center px-3 py-2 rounded-lg <?= getActiveClass($title, 'Home') ?> text-sm font-medium space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Home</span>
                        </a>
                        <a href="/A&RDuties/talent-discovery"
                            class="inline-flex items-center px-3 py-2 rounded-lg <?= getActiveClass($title, 'Talent Discovery') ?> text-sm font-medium space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Talent Discovery</span>
                        </a>
                        <a href="/A&RDuties/artist-development"
                            class="inline-flex items-center px-3 py-2 rounded-lg <?= getActiveClass($title, 'Artist Development') ?> text-sm font-medium space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <path d="M9 18V5l12-2v13"></path>
                                <circle cx="6" cy="18" r="3"></circle>
                                <circle cx="18" cy="16" r="3"></circle>
                            </svg>
                            <span>Artist Development</span>
                        </a>
                        <a href="/A&RDuties/ar-marketplace"
                            class="inline-flex items-center px-3 py-2 rounded-lg <?= getActiveClass($title, 'A&R Market Place') ?> text-sm font-medium space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                            <span>A&R Marketplace</span>
                        </a>
                        <a href="/A&RDuties/pricing"
                            class="inline-flex items-center px-3 py-2 rounded-lg <?= getActiveClass($title, 'Pricing') ?> text-sm font-medium space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            <span>Pricing</span>
                        </a>
                        <div class="relative group">
                            <button
                                class="inline-flex items-center px-3 py-2 rounded-lg text-gray-300 hover:text-white hover:bg-white/10 text-sm font-medium space-x-2 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 text-orange-400">
                                    <path
                                        d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z">
                                    </path>
                                    <path d="M5 3v4"></path>
                                    <path d="M19 17v4"></path>
                                    <path d="M3 5h4"></path>
                                    <path d="M17 19h4"></path>
                                </svg>
                                <span>Tools</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 transform group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div
                                class="absolute left-0 mt-2 w-56 rounded-lg shadow-lg glass-effect opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 ease-in-out z-50 glass-effect">
                                <div class="py-1">
                                    <a href="/A&RDuties/ai-chat"
                                        class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                                        </svg>
                                        <span>AI Chat</span>
                                    </a>
                                    <a href="/A&RDuties/rollout-plan"
                                        class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                            <path d="M12 13V2l8 4-8 4"></path>
                                            <path d="M20.55 10.23A9 9 0 1 1 8 4.94"></path>
                                            <path d="M8 10a5 5 0 1 0 8.9 2.02"></path>
                                        </svg>
                                        <span>Rollout Plan</span>
                                    </a>
                                    <a href="/A&RDuties/marketing-campaign"
                                        class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                            <path d="m3 11 18-5v12L3 14v-3z"></path>
                                            <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                                        </svg>
                                        <span>Marketing Campaign</span>
                                    </a>
                                    <a href="/A&RDuties/pr"
                                        class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                                            <path d="M22 2 11 13"></path>
                                        </svg>
                                        <span>PR</span>
                                    </a>
                                    <a href="/A&RDuties/legal-services"
                                        class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                            <path d="M7 21h10"></path>
                                            <path d="M12 3v18"></path>
                                            <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                        </svg>
                                        <span>Legal Services</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <!-- Auth Buttons -->
                <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Dashboard + Sign Out -->
                <div class="hidden md:flex items-center space-x-2">
                    <a class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-10 px-4 py-2 hover:bg-white/10" href="/A&RDuties/dashboard-overview">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                        <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                        <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                        <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                        <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                    </svg>
                    Dashboard
                    </a>
                    <a href="/A&RDuties/signout" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-10 px-4 py-2 border-white/20 hover:bg-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" x2="9" y1="12" y2="12"></line>
                    </svg>
                    Sign Out
                    </a>
                </div>
                <?php else: ?>
                <!-- Sign In + Sign Up -->
                <div class="hidden md:flex items-center space-x-2 ml-auto">
                    <a href="/A&RDuties/signin" class="px-4 py-2 border border-white/20 rounded-md text-sm text-white hover:bg-white/10">Sign In</a>
                    <a href="/A&RDuties/signup" class="px-4 py-2 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 rounded-md text-sm text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <line x1="19" x2="19" y1="8" y2="14"></line>
                        <line x1="22" x2="16" y1="11" y2="11"></line>
                    </svg>
                    Sign Up
                    </a>
                </div>
                <?php endif; ?>


                <!-- Mobile Menu Button -->
                <div class="md:hidden ml-auto">
                    <button id="mobile-menu-button" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-300 hover:text-white hover:bg-white/10 focus:outline-none"
                        aria-expanded="false" aria-controls="mobile-menu">
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 <?= getActiveClass($title, 'Home') ?>"
                        href="/A&RDuties"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg><span class="font-medium">Home</span>
                    </a>
                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 <?= getActiveClass($title, 'Talent Discovery') ?>"
                        href="/A&RDuties/talent-discovery"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span class="font-medium">Talent Discovery</span>
                    </a>
                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 <?= getActiveClass($title, 'Artist Development') ?>"
                        href="/A&RDuties/artist-development"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M9 18V5l12-2v13"></path>
                            <circle cx="6" cy="18" r="3"></circle>
                            <circle cx="18" cy="16" r="3"></circle>
                        </svg><span class="font-medium">Artist Development</span>
                    </a>
                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 <?= getActiveClass($title, 'A&R Market Place') ?>"
                        href="/A&RDuties/ar-marketplace"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg><span class="font-medium">A&amp;R Marketplace</span>
                    </a>
                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 <?= getActiveClass($title, 'Pricing') ?>"
                        href="/A&RDuties/pricing">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5">
                            <line x1="12" x2="12" y1="2" y2="22"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg><span class="font-medium">Pricing</span></a>
                    <div class="relative">
                        <button type="button"
                            class="w-full flex items-center justify-between px-4 py-3 rounded-lg transition-all duration-200 text-gray-300 hover:bg-white/10 hover:text-white focus:outline-none"
                            aria-controls="mobile-tools-dropdown" aria-expanded="false">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 text-orange-400 mr-2">
                                    <path
                                        d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z">
                                    </path>
                                    <path d="M5 3v4"></path>
                                    <path d="M19 17v4"></path>
                                    <path d="M3 5h4"></path>
                                    <path d="M17 19h4"></path>
                                </svg>
                                Tools
                            </div>
                            <svg class="w-4 h-4 transition-transform duration-200 transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-tools-dropdown" class="mt-1 ml-6 space-y-1 hidden">

                            <a href="/A&RDuties/ai-chat"
                                class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                                </svg>
                                <span>AI Chat</span>
                            </a>
                            <a href="/A&RDuties/rollout-plan"
                                class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="M12 13V2l8 4-8 4"></path>
                                    <path d="M20.55 10.23A9 9 0 1 1 8 4.94"></path>
                                    <path d="M8 10a5 5 0 1 0 8.9 2.02"></path>
                                </svg>
                                <span>Rollout Plan</span>
                            </a>
                            <a href="/A&RDuties/marketing-campaign"
                                class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="m3 11 18-5v12L3 14v-3z"></path>
                                    <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                                </svg>
                                <span>Marketing Campaign</span>
                            </a>
                            <a href="/A&RDuties/pr"
                                class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="m22 2-7 20-4-9-9-4Z"></path>
                                    <path d="M22 2 11 13"></path>
                                </svg>
                                <span>PR</span>
                            </a>
                            <a href="/A&RDuties/legal-services"
                                class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                    <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"></path>
                                    <path d="M7 21h10"></path>
                                    <path d="M12 3v18"></path>
                                    <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"></path>
                                </svg>
                                <span>Legal Services</span>
                            </a>

                        </div>
                    </div>
                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 text-gray-300 hover:text-white hover:bg-white/10"
                        href="/A&RDuties/policy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                        </svg><span class="font-medium">Policy</span>
                    </a>

                    <a class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 text-gray-300 hover:text-white hover:bg-white/10"
                        href="/A&RDuties/help"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m4.93 4.93 4.24 4.24"></path>
                            <path d="m14.83 9.17 4.24-4.24"></path>
                            <path d="m14.83 14.83 4.24 4.24"></path>
                            <path d="m9.17 14.83-4.24 4.24"></path>
                            <circle cx="12" cy="12" r="4"></circle>
                        </svg><span class="font-medium">Help &amp; Support</span>
                    </a>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Dashboard + Sign Out -->
                        <div class="mt-4 pt-4 border-t border-white/10 flex flex-col gap-2 px-4">
                            <a class="inline-flex items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-10 px-4 py-2 hover:bg-white/10 w-full justify-start" href="/A&RDuties/dashboard-overview">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                                <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                                <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                                <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                            </svg>
                            Dashboard
                            </a>
                            <a href="/A&RDuties/signout" class="inline-flex items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:text-accent-foreground h-10 px-4 py-2 border-white/20 hover:bg-white/10 w-full justify-start text-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" x2="9" y1="12" y2="12"></line>
                            </svg>
                            Sign Out
                            </a>
                        </div>
                        <?php else: ?>
                        <!-- Sign In + Sign Up -->
                        <div class="pt-4 border-t border-white/10 px-4">
                            <a href="/A&RDuties/signin" class="block w-full text-center px-4 py-2 border border-white/20 rounded-md text-sm text-white hover:bg-white/10 mb-2">
                            Sign In
                            </a>
                            <a href="/A&RDuties/signup" class="block w-full text-center px-4 py-2 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 rounded-md text-sm text-white">
                            Sign Up
                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        </div>
    </header>


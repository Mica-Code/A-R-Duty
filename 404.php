<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Not Found - A&R DUTY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
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
        }
    </script>
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>

<body class="bg-black text-white font-sans min-h-screen flex flex-col" style="background-color: #020617;">
    <!-- Particle Background -->
    <div id="particles-js" class="fixed top-0 left-0 w-full h-full -z-10"></div>
    
    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-effect">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex-shrink-0 flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5 text-white">
                            <path d="M9 18V5l12-2v13"></path>
                            <circle cx="6" cy="18" r="3"></circle>
                            <circle cx="18" cy="16" r="3"></circle>
                        </svg>
                    </div>
                    <span class="text-xl font-bold gradient-text">A&R DUTY</span>
                </a>
                <div class="flex-1 flex justify-end">
                    <a href="/A-R-Duty" class="px-4 py-2 rounded-lg bg-orange-600 hover:bg-orange-700 text-white transition-colors duration-200">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center px-4 py-16">
        <div class="w-full max-w-4xl text-center">
            <div class="glass-effect rounded-2xl p-8 md:p-12 shadow-2xl">
                <div class="text-9xl font-bold gradient-text mb-6">404</div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Page Not Found</h1>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Oops! The page you're looking for doesn't exist or has been moved.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                    <a href="/A-R-Duty" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 flex items-center justify-center space-x-2">
                        <span>Go to Homepage</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </a>
                    <a href="#" class="px-6 py-3 bg-transparent border border-orange-500 text-orange-400 hover:bg-orange-500/10 font-medium rounded-lg transition-all duration-200 flex items-center justify-center space-x-2">
                        <span>Contact Support</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-background/80 backdrop-blur-sm border-t border-white/10 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-6 h-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-white">
                            <path d="M9 18V5l12-2v13"></path>
                            <circle cx="6" cy="18" r="3"></circle>
                            <circle cx="18" cy="16" r="3"></circle>
                        </svg>
                    </div>
                    <span class="font-bold">A&R DUTY</span>
                </div>
                <p class="text-sm text-gray-400 mt-4 md:mt-0">
                    &copy; 2025 A&R DUTY. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS('particles-js', {
                particles: {
                    number: { value: 80, density: { enable: true, value_area: 800 } },
                    color: { value: '#ff5d00' },
                    shape: { type: 'circle' },
                    opacity: {
                        value: 0.5,
                        random: true,
                        anim: { enable: true, speed: 1, opacity_min: 0.1, sync: false }
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: { enable: true, speed: 2, size_min: 0.1, sync: false }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ff5d00',
                        opacity: 0.2,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 1,
                        direction: 'none',
                        random: true,
                        straight: false,
                        out_mode: 'out',
                        bounce: false,
                        attract: { enable: false, rotateX: 600, rotateY: 1200 }
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: { enable: true, mode: 'grab' },
                        onclick: { enable: true, mode: 'push' },
                        resize: true
                    },
                    modes: {
                        grab: { distance: 140, line_linked: { opacity: 0.5 } },
                        push: { particles_nb: 4 }
                    }
                },
                retina_detect: true
            });
        });
    </script>
</body>

</html>

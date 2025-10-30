    <!-- Footer -->
    <footer class="bg-background/80 backdrop-blur-sm border-t border-white/10 mt-auto py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <div class="flex justify-center items-center space-x-6 mb-4"><a
                    class="text-sm hover:text-orange-400 transition-colors" href="/A&RDuties/policy">Policy</a></div>
            <p class="text-sm">© <?= date("Y"); ?> A&amp;R DUTY. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>




        <!-- Initialize Particles -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        // value: '#f97316'
                        value: '#dfdfdf'
                    },
                    shape: {
                        type: 'circle',
                        stroke: {
                            width: 0,
                            color: '#000000'
                        }
                    },
                    opacity: {
                        value: 0.5,
                        random: true,
                        animation: {
                            enable: true,
                            speed: 1,
                            minimumValue: 0.3,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        animation: {
                            enable: true,
                            speed: 2,
                            minimumValue: 1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#f97316',
                        opacity: 9,
                        width: 0.08
                    },
                    move: {
                        enable: true,
                        speed: 2.5,
                        direction: 'none',
                        random: true,
                        straight: false,
                        outModes: {
                            default: 'out'
                        },
                        attract: {
                            enable: true,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detect_on: 'window',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'repulse',
                            parallax: {
                                enable: true,
                                force: 30,
                                smooth: 10
                            }
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        repulse: {
                            distance: 100,  // Distance of repulsion
                            duration: 0.4   // How long the effect lasts
                        },
                        push: {
                            particles_nb: 3
                        }
                    }
                },
                detectRetina: true,
                background: {
                    color: '#000000',
                    image: '',
                    position: '50% 50%',
                    repeat: 'no-repeat',
                    size: 'cover'
                }
            });
        });
    </script>

    <script>

         document.addEventListener('DOMContentLoaded', function () {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        // value: '#f97316'
                        value: '#dfdfdf'
                    },
                    shape: {
                        type: 'circle',
                        stroke: {
                            width: 0,
                            color: '#000000'
                        }
                    },
                    opacity: {
                        value: 0.5,
                        random: true,
                        animation: {
                            enable: true,
                            speed: 1,
                            minimumValue: 0.3,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        animation: {
                            enable: true,
                            speed: 2,
                            minimumValue: 1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#f97316',
                        opacity: 9,
                        width: 0.08
                    },
                    move: {
                        enable: true,
                        speed: 2.5,
                        direction: 'none',
                        random: true,
                        straight: false,
                        outModes: {
                            default: 'out'
                        },
                        attract: {
                            enable: true,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detect_on: 'window',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'repulse',
                            parallax: {
                                enable: true,
                                force: 30,
                                smooth: 10
                            }
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        repulse: {
                            distance: 100, // Distance of repulsion
                            duration: 0.4 // How long the effect lasts
                        },
                        push: {
                            particles_nb: 3
                        }
                    }
                },
                detectRetina: true,
                background: {
                    color: '#000000',
                    image: '',
                    position: '50% 50%',
                    repeat: 'no-repeat',
                    size: 'cover'
                }
            });
        });
    </script>

    <script>
        // Modal Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('campaignModal');
            const openModalBtn = document.getElementById('openCampaignModal');
            const closeModalBtn = document.getElementById('closeCampaignModal');
            const modalForm = document.querySelector('#campaignModal form');

            // Open modal
            if (openModalBtn && modal) {
                openModalBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    modal.classList.remove('hidden');
                    // Trigger reflow to ensure the element is rendered before adding the class
                    void modal.offsetWidth;
                    modal.classList.add('show');
                    document.body.style.overflow = 'hidden';
                });
            }

            // Close modal with X button
            function closeModal() {
                if (modal) {
                    modal.classList.remove('show');
                    // Wait for the animation to complete before hiding
                    setTimeout(() => {
                        modal.classList.add('hidden');
                    }, 300); // Match this with the CSS transition duration
                    document.body.style.overflow = '';
                }
            }
            
            if (closeModalBtn && modal) {
                closeModalBtn.addEventListener('click', closeModal);
            }

            // Close modal when clicking outside
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        closeModal();
                    }
                });
            }

            // Handle form submission
            if (modalForm) {
                modalForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    // Here you can add form submission logic
                    console.log('Form submitted');
                    closeModal();
                    
                    // Show success message (you can customize this)
                    setTimeout(() => {
                        alert('Campaign created successfully!');
                    }, 300); // Wait for modal to close before showing alert
                });
            }
        });


        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                const closeToolsDropdown = () => {
                    const toolsButton = mobileMenu.querySelector('button[aria-expanded="true"]');
                    if (toolsButton) {
                        const dropdown = toolsButton.nextElementSibling;
                        toolsButton.setAttribute('aria-expanded', 'false');
                        dropdown.classList.add('hidden');
                        toolsButton.querySelector('svg').classList.remove('rotate-180');
                    }
                };

                // Toggle mobile menu
                mobileMenuButton.addEventListener('click', function (e) {
                    e.stopPropagation(); // Prevent event from bubbling up
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    this.setAttribute('aria-expanded', !isExpanded);
                    mobileMenu.classList.toggle('hidden');

                    // Close tools dropdown when toggling the mobile menu
                    closeToolsDropdown();
                });

                // Close menu when clicking outside
                document.addEventListener('click', function (event) {
                    if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                        mobileMenu.classList.add('hidden');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                        closeToolsDropdown();
                    }
                });

                // Mobile dropdown toggle for Tools
                const toolsButton = mobileMenu.querySelector('button[aria-controls="mobile-tools-dropdown"]');
                if (toolsButton) {
                    toolsButton.addEventListener('click', function (e) {
                        e.stopPropagation(); // Prevent event from bubbling up to document
                        const dropdown = document.getElementById('mobile-tools-dropdown');
                        if (dropdown) {
                            const isExpanded = this.getAttribute('aria-expanded') === 'true';
                            this.setAttribute('aria-expanded', !isExpanded);
                            dropdown.classList.toggle('hidden');
                            this.querySelector('svg').classList.toggle('rotate-180');
                        }
                    });
                }
            }
        });
    </script>

</body>

</html>
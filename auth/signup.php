<?php

$title = "Sign Up";
include '../includes/header.php';
?>
    <!-- Main Content -->
    <div class="flex items-center justify-center min-h-screen pt-24 pb-16 px-4">
        <div class="w-full max-w-md" style="opacity: 1; transform: none;">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10">
                <div class="flex flex-col space-y-1.5 p-6 text-center">
                    <h3 class="tracking-tight text-3xl font-bold gradient-text">Create Your Account</h3>
                    <p class="text-sm text-gray-300">Join the future of the music industry.</p>
                </div>
                <div class="p-6 pt-0">
                    <form id="signupForm" class="space-y-6">
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="name">Full Name</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg><input type="text"
                                    class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10 bg-white/5 border-white/20"
                                    id="name" name="name" placeholder="John Doe" required=""></div>
                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="email">Email</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg><input type="email"
                                    class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10 bg-white/5 border-white/20"
                                    id="email" name="email" placeholder="you@example.com" required=""></div>
                        </div>
                        <div class="space-y-2"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="password">Password</label>
                            <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg><input type="password"
                                    class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10 bg-white/5 border-white/20"
                                    id="password" name="password" placeholder="••••••••" required=""></div>
                        </div>
                        <div class="space-y-2">
                        <label for="role" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                            I am a...
                        </label>

                        <select id="role" name="role" class="flex h-10 w-full items-center justify-between rounded-md border border-white/20 bg-white/10 text-white px-3 py-2 text-sm placeholder:text-muted-foreground ring-offset-background focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                            <option value="artist" class="bg-gray-800 text-white">Artist</option>
                            <option value="manager" class="bg-gray-800 text-white">Manager</option>
                            <option value="ar" class="bg-gray-800 text-white">A&amp;R</option>
                            <option value="label" class="bg-gray-800 text-white">Label</option>
                        </select>
                        </div>

                        <button
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 neon-glow"
                            type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-2 h-5 w-5">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <line x1="19" x2="19" y1="8" y2="14"></line>
                                <line x1="22" x2="16" y1="11" y2="11"></line>
                            </svg> Sign Up
                        </button>
                    </form>
                    <p class="mt-6 text-center text-sm text-gray-400">Already have an account?<a
                            class="font-medium text-orange-400 hover:text-orange-500 ml-1" href="signin">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            showLoader();
            fetch('/A&RDuties/auth/process_signup.php', {
                method: 'POST',
                body: formData
            })
            .then(res => {
                // console.log("Raw response:", res); // logs the full response object
                return res.json();
            })            
            .then(data => {
                // console.log("Debug info:", data.debug);
                Toastify({
                    text: data.message,
                    duration: 4000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: data.status === "success" ? "#22c55e" : "#ef4444",
                }).showToast();

                if (data.status === "success") {
                    form.reset();
                    setTimeout(() => {
                        window.location.href = `/A&RDuties/auth/verify.php?email=${formData.get('email')}`;
                    }, 1500);
                }
            })
            .catch(err => {
                console.error("Fetch error:", err); // logs to browser console
                Toastify({
                    text: "Something went wrong. Please try again.",
                    duration: 4000,
                     gravity: "top",
                    position: "right",
                    backgroundColor: "#ef4444", 
                }).showToast();
            })
            .finally(() => {
                hideLoader();
            });
        });
    </script>


<?php include '../includes/footer.php'; ?>
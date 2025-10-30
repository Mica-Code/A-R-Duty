<?php
$title = "Sign In";
include '../includes/header.php';
?>
    <!-- Main Content -->
    <div class="flex items-center justify-center min-h-screen pt-24 pb-16 px-4">
        <div class="w-full max-w-md" style="opacity: 1; transform: none;">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10">
                <div class="flex flex-col space-y-1.5 p-6 text-center">
                    <h3 class="tracking-tight text-3xl font-bold gradient-text">Welcome Back!</h3>
                    <p class="text-sm text-gray-300">Sign in to continue your journey.</p>
                </div>
                <div class="p-6 pt-0">
                    <form id="login-form" class="space-y-6" onsubmit="handleLogin(event)">
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
                        </div><button
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 neon-glow"
                            type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-2 h-5 w-5">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <line x1="19" x2="19" y1="8" y2="14"></line>
                                <line x1="22" x2="16" y1="11" y2="11"></line>
                            </svg> Sign In</button>
                    </form>
                    <p class="mt-6 text-center text-sm text-gray-400">Don't have an account?<a
                            class="font-medium text-orange-400 hover:text-orange-500 ml-1" href="signup">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

<script>
    async function handleLogin(e) {
        e.preventDefault();
        showLoader();

        const form = document.getElementById('login-form');
        const email = form.email.value.trim();
        const password = form.password.value;

        const formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);

        const response = await fetch('/A&RDuties/auth/signin-process.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            hideLoader();
            const msgBox = document.getElementById('login-message');
            if (data.status === 'success') {
            Toastify({
                    text: data.message,
                    duration: 4000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#22c55e",
                }).showToast();
            setTimeout(() => {
                window.location.href = '/A&RDuties/dashboard/index.php';
            }, 2000);
            } 
            else if (data.status === 'verify') {
            Toastify({
                    text: data.message,
                    duration: 4000,
                     gravity: "top",
                    position: "right",
                    backgroundColor: "#eab308",
                }).showToast();

                setTimeout(() => {
                    window.location.href = `verify.php?email=${email}`;
                }, 4200); 
            }
            else{
            Toastify({
                    text: data.message,
                    duration: 4000,
                     gravity: "top",
                    position: "right",
                    backgroundColor: "#ef4444",
                }).showToast();
            }
        })
        .catch(err => {
            hideLoader();
            Toastify({
                    text: "Login failed. Please try again.",
                    duration: 4000,
                     gravity: "top",
                    position: "right",
                    backgroundColor: "#ef4444",
                }).showToast();
        });
    }
</script>

<?php include '../includes/footer.php'; ?>
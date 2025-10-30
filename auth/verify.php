<?php
$title = "Verify Email";
include '../includes/header.php';
?>
    <!-- Main Content -->
    <div class="flex items-center justify-center min-h-screen pt-24 pb-16 px-4">
        <div class="w-full max-w-md">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10">
                <div class="flex flex-col space-y-1.5 p-6 text-center">
                   <h3 class="tracking-tight text-3xl font-bold gradient-text">Verify Your Email</h3>
                    <p class="text-sm text-gray-300">
                    We've sent a 6-digit code to your email.<br>
                    <span class="text-orange-400" style="font-weight: bold; font-size: 12px;">If you don't see it in your inbox, please check your spam folder.</span>
                    </p>

                </div>
                <div class="p-6 pt-0">
                    <form id="otp-form" class="space-y-6" onsubmit="handleVerify(event)">
                        <div class="flex justify-between gap-2 mb-6">
                            <?php for ($i = 1; $i <= 6; $i++): ?>
                            <input type="text" 
                                    name="otp[]" 
                                    maxlength="1" 
                                    class="w-12 h-12 text-2xl text-center rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent bg-white/5 border-white/20 text-white"
                                    onkeyup="moveToNext(this, <?php echo $i; ?>)" 
                                    onkeypress="return isNumberKey(event)"
                                    autocomplete="off"
                                    required>
                            <?php endfor; ?>
                        </div>
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email'] ?? ''); ?>">
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 neon-glow"
                        >Verify</button>
                    </form>

                    <!-- Placeholder for countdown and resend button -->
                    <div class="text-center text-sm text-gray-400 mt-4">
                        <span id="countdown">Resend available in <strong>60</strong> seconds</span>
                    </div>


                    <!-- Placeholder for messages -->
                    <div id="message" class="text-center mt-4 text-sm"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts for input behavior -->
<!-- <script>
    function moveToNext(input, index) {
        const inputs = document.querySelectorAll('input[name="otp[]"]');
        if (input.value.length === 1 && index < inputs.length) {
            inputs[index]?.focus();
        }
    }

    function isNumberKey(evt) {
        const charCode = (evt.which) ? evt.which : evt.keyCode;
        return charCode >= 48 && charCode <= 57;
    }
</script> -->

<!-- Scripts for input behavior -->

<script>
    const otpInputs = document.querySelectorAll('input[name="otp[]"]');

    otpInputs.forEach((input, index) => {
    // Handle typing
    input.addEventListener('input', (e) => {
        const value = e.target.value.replace(/\D/g, ''); // remove non-digits
        if (value.length === 1) {
        e.target.value = value;
        if (index < otpInputs.length - 1) {
            otpInputs[index + 1].focus();
        }
        } else {
        e.target.value = ''; // clear invalid input
        }
    });

    // Handle backspace
    input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !input.value && index > 0) {
        otpInputs[index - 1].focus();
        }
    });

    // Handle paste
    input.addEventListener('paste', (e) => {
        e.preventDefault();
        const pasteData = e.clipboardData.getData('text').replace(/\D/g, '').slice(0, 6);
        pasteData.split('').forEach((digit, i) => {
        if (otpInputs[i]) {
            otpInputs[i].value = digit;
        }
        });
        if (otpInputs[pasteData.length - 1]) {
        otpInputs[pasteData.length - 1].focus();
        }
    });
    });
</script>


<!-- Countdown and Resend Button -->
<script>
    let countdown = 60;
    const countdownEl = document.getElementById('countdown');

    function startCountdown() {
    const timer = setInterval(() => {
        countdown--;
        countdownEl.innerHTML = `Resend available in <strong>${countdown}</strong> seconds`;

        if (countdown <= 0) {
        clearInterval(timer);
        countdownEl.innerHTML = `<button id="resendBtn" class="text-orange-500 hover:underline">Resend OTP</button>`;
        }
    }, 1000);
    }

    startCountdown();
</script>


<!-- Resend OTP -->
<script>
    document.addEventListener('click', function(e) {
    if (e.target && e.target.id === 'resendBtn') {
        const email = document.querySelector('input[name="email"]').value;
        showLoader(); // optional loader

        fetch('/A&RDuties/auth/resend-otp.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `email=${encodeURIComponent(email)}`
        })
        .then(res => res.json())
        .then(data => {
        hideLoader();
        document.getElementById('message').innerHTML = `<p class="text-green-500">${data.message}</p>`;
        countdown = 60;
        startCountdown();
        })
        .catch(err => {
        hideLoader();
        document.getElementById('message').innerHTML = `<p class="text-red-500">Failed to resend OTP.</p>`;
        });
    }
    });
</script>

<!-- Verify OTP -->
<script>
    function handleVerify(e) {
    e.preventDefault();
    showLoader();

    const form = document.getElementById('otp-form');
    const email = form.querySelector('input[name="email"]').value;
    const otpInputs = form.querySelectorAll('input[name="otp[]"]');
    let otp = '';

    otpInputs.forEach(input => {
        otp += input.value.trim();
    });

    if (otp.length !== 6 || !/^\d{6}$/.test(otp)) {
        hideLoader();
        document.getElementById('message').innerHTML = `<p class="text-red-500">Please enter a valid 6-digit OTP.</p>`;
        return;
    }

    const formData = new FormData();
    formData.append('email', email);
    formData.append('otp', otp);

    fetch('/A&RDuties/auth/verify-process.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        hideLoader();
        if (data.status === 'success') {
        document.getElementById('message').innerHTML = `<p class="text-green-500">${data.message}</p>`;
        setTimeout(() => {
            window.location.href = '/A&RDuties/auth/signin'; // change to your redirect target
        }, 2000);
        } else {
        document.getElementById('message').innerHTML = `<p class="text-red-500">${data.message}</p>`;
        }
    })
    .catch(err => {
        hideLoader();
        document.getElementById('message').innerHTML = `<p class="text-red-500">Verification failed. Please try again.</p>`;
    });
    }
</script>

<?php include '../includes/footer.php'; ?>
<?php
    require_once '../auth/auth.php';
    $title = "AI Chat";
    include '../includes/header.php';
?>
<!-- Main Content -->
<div class="min-h-screen pt-16 flex flex-col">
    <div class="flex-grow flex justify-center p-4">
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full max-w-4xl flex flex-col glass-effect border-white/10">
            <div class="flex flex-col space-y-1.5 p-6 text-center">
                <h3 class="tracking-tight text-3xl font-bold gradient-text flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-8 h-8">
                        <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"></path>
                        <path d="M5 3v4"></path>
                        <path d="M19 17v4"></path>
                        <path d="M3 5h4"></path>
                        <path d="M17 19h4"></path>
                    </svg>
                    AI Music Assistant
                </h3>
                <p class="text-sm text-gray-300">Your personal A&amp;R co-pilot. Ask me anything about the music industry.</p>
            </div>
            <div class="flex flex-col justify-between flex-grow p-6">
                <div class="text-center text-gray-400">
                    <h3 class="text-lg font-semibold text-white mb-4">Prompt Suggestions</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <button class="p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors text-left">
                            Create a rollout plan for my new single
                        </button>
                        <button class="p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors text-left">
                            How do I market my music as an indie artist?
                        </button>
                        <button class="p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors text-left">
                            Find artists similar to Frank Ocean
                        </button>
                    </div>
                </div>
                <div class="mt-10 border-t border-white/10 pt-4">
                    <form class="flex items-center gap-4">
                        <input type="text"
                            class="flex h-10 w-full rounded-md border px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 flex-grow bg-white/5 border-white/20 text-white placeholder:text-gray-400"
                            placeholder="Ask about marketing, rollout plans, trends..." value="">
                        <button
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 w-10 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800"
                            type="submit" disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                <path d="m22 2-7 20-4-9-9-4Z"></path>
                                <path d="M22 2 11 13"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
document.querySelector('form').addEventListener('submit', async (e) => {
  e.preventDefault();
  const input = e.target.querySelector('input');
  const message = input.value.trim();
  if (!message) return;

  // Optional: show user message in chat UI (if you build that later)

  const res = await fetch('/A-R-Duty/dashboard/chat.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ message })
  });

  const data = await res.text();
//   if (data.reply) {
//     console.log('AI:', data.reply);
//     // append reply to chat UI
//   } else {
//     console.error(data.error || 'Error');
//   }
console.log(data);  
input.value = '';
    const button = document.querySelector("button[type='submit']");
  button.disabled = true;
});

document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("input[type='text']");
    const button = document.querySelector("button[type='submit']");

    input.addEventListener("input", function () {
      button.disabled = input.value.trim() === "";
    });
});
</script>


<?php include '../includes/footer.php'; ?>

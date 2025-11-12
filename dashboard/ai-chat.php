<?php
    require_once '../auth/auth.php';
    $title = "AI Chat";
    include '../includes/db.php';
    include '../includes/header.php';

    session_start();

    // Check the number of chats for the user
    $userId = $_SESSION['user_id']; // Assuming user ID is stored in the session or passed another way

    // Prepare the query
    $chatCountQuery = "SELECT COUNT(*) AS chat_count FROM ai_chats WHERE user_id = ?";
    // Prepare the statement
    $stmt = $conn->prepare($chatCountQuery);

    // Bind the parameter (integer)
    $stmt->bind_param('i', $userId);

    // Execute the query
    $stmt->execute();

    // Bind the result
    $stmt->bind_result($chatCount);

    // Fetch the result
    $stmt->fetch();

    // Close the statement
    $stmt->close();

    // Optionally, you can close the connection
    $conn->close();

?>

<style>
    /* === Universal Markdown Rendering (Chat Messages) === */
    .markdown-content {
    font-family: 'Inter', sans-serif;
    line-height: 1.7;
    word-wrap: break-word;
    word-break: break-word;
    overflow-wrap: break-word;
    }

    /* Headings */
    .markdown-content h1 {
    font-size: 1.35rem;
    font-weight: 700;
    margin: 0.75rem 0 0.5rem;
    }
    .markdown-content h2 {
    font-size: 1.25rem;
    font-weight: 600;
    margin: 0.75rem 0 0.45rem;
    }
    .markdown-content h3 {
    font-size: 1.125rem;
    font-weight: 600;
    margin: 0.65rem 0 0.4rem;
    }
    .markdown-content h4 {
    font-size: 1rem;
    font-weight: 600;
    margin: 0.5rem 0 0.35rem;
    }

    /* Paragraphs */
    .markdown-content p {
    margin-bottom: 0.6rem;
    }

    /* Lists */
    .markdown-content ul,
    .markdown-content ol {
    margin: 0.5rem 0 0.75rem 1.25rem;
    }
    .markdown-content ul {
    list-style-type: disc;
    }
    .markdown-content ol {
    list-style-type: decimal;
    }
    .markdown-content li {
    margin-bottom: 0.25rem;
    }

    /* Bold & Italic */
    .markdown-content strong {
    font-weight: 700;
    }
    .markdown-content em {
    font-style: italic;
    }

    /* Blockquotes */
    .markdown-content blockquote {
    border-left: 4px solid rgba(255,255,255,0.3);
    padding-left: 0.75rem;
    margin: 0.75rem 0;
    font-style: italic;
    opacity: 0.9;
    }

    /* Inline Code */
    .markdown-content code {
    background: rgba(255,255,255,0.15);
    padding: 0.15rem 0.35rem;
    border-radius: 4px;
    font-size: 0.875em;
    font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
    }

    /* Code Blocks */
    .markdown-content pre {
    background: rgba(255,255,255,0.1);
    color: #fff;
    padding: 0.75rem;
    border-radius: 6px;
    overflow-x: auto;
    margin: 0.75rem 0;
    font-size: 0.875em;
    }
    .markdown-content pre code {
    background: none;
    padding: 0;
    }

    /* Tables */
    .markdown-content table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1rem;
    font-size: 0.9em;
    }
    .markdown-content th,
    .markdown-content td {
    border: 1px solid rgba(255,255,255,0.2);
    padding: 0.5rem;
    text-align: left;
    }
    .markdown-content th {
    background-color: rgba(255,255,255,0.1);
    font-weight: 600;
    }

    /* Links */
    .markdown-content a {
    color: #ffb86c;
    text-decoration: underline;
    }
    .markdown-content a:hover {
    color: #ffd9a0;
    }

    /* Horizontal Rule */
    .markdown-content hr {
    border: none;
    border-top: 1px solid rgba(255,255,255,0.2);
    margin: 0.75rem 0;
    }

    /* Images */
    .markdown-content img {
    max-width: 100%;
    border-radius: 6px;
    margin: 0.5rem 0;
    }

    /* Task Lists */
    .markdown-content input[type="checkbox"] {
    margin-right: 0.5rem;
    transform: scale(1.2);
    }

    /* Tighten the last element */
    .markdown-content > *:last-child {
    margin-bottom: 0;
    }
</style>

<style>
    /* === Chat loading dots animation === */
    .loading-dots {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 4px;
    }

    .loading-dots span {
    width: 8px;
    height: 8px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    opacity: 0.3;
    animation: dotsFade 1s infinite;
    }

    .loading-dots span:nth-child(1) { animation-delay: 0s; }
    .loading-dots span:nth-child(2) { animation-delay: 0.2s; }
    .loading-dots span:nth-child(3) { animation-delay: 0.4s; }

    @keyframes dotsFade {
    0%, 80%, 100% { opacity: 0.3; transform: translateY(0); }
    40% { opacity: 1; transform: translateY(-2px); }
    }
</style>

<style>
    /* === Date Divider === */
    .date-divider {
    font-weight: bold;
    font-size: 1.1rem; /* Slightly larger font size for bold text */
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0; /* Space before and after the date divider */
    }

    .date-divider::before {
    content: '';
    flex-grow: 1;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.2); /* Light line color */
    margin-right: 10px; /* Space between the line and the text */
    }

    .date-divider::after {
    content: '';
    flex-grow: 1;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.2); /* Light line color */
    margin-left: 10px; /* Space between the line and the text */
    }
</style>


<!-- Main Content -->
<div class="min-h-screen pt-16 flex flex-col">
  <div class="flex-grow flex justify-center p-4">
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full max-w-4xl flex flex-col glass-effect border-white/10">
      
      <!-- Header -->
      <div class="flex flex-col space-y-1.5 p-6 text-center">
        <h2 class="text-3xl font-bold text-gray-300 flex items-center justify-center gap-2">Hello, <?php echo $_SESSION['user_name']; ?> 👋</h2>
        <h3 class="tracking-tight text-3xl font-bold gradient-text flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="w-8 h-8">
            <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.75 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"></path>
          </svg>
          AI Music Assistant
        </h3>
        <p class="text-sm text-gray-300">Your personal A&amp;R co-pilot. Ask me anything about the music industry.</p>
      </div>

      <div id="prompt-suggestions" class="flex flex-col space-y-1.5 p-6 text-center" style="display: none;">
        <div class="text-center text-gray-400">
            <h3 class="text-lg font-semibold text-white mb-4">Prompt Suggestions</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <button class="p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors text-left" onclick="startChat('Create a rollout plan for my new single')">
                    Create a rollout plan for my new single
                </button>
                <button class="p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors text-left" onclick="startChat('How do I market my music as an indie artist?')">
                    How do I market my music as an indie artist?
                </button>
                <button class="p-4 rounded-lg bg-white/5 border border-white/10 hover:bg-white/10 transition-colors text-left" onclick="startChat('Find artists similar to Frank Ocean')">
                    Find artists similar to Frank Ocean
                </button>
            </div>
        </div>
      </div>

      <!-- Chat messages -->
      <div id="chat-box" class="flex-grow overflow-y-auto px-6 py-4 space-y-4" style="max-height: calc(100vh - 300px);">
        <!-- Messages will be injected here -->
      </div>

      <!-- Input area -->
      <div class="border-t border-white/10 p-4">
        <form id="chat-form" class="flex items-center gap-4">
          <input type="text" id="chat-input"
            class="flex h-10 w-full rounded-md border px-3 py-2 text-sm bg-white/5 border-white/20 text-white placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-orange-600"
            placeholder="Ask about marketing, rollout plans, trends..." autocomplete="off">
          <button
            class="inline-flex items-center justify-center rounded-md text-sm font-medium text-white h-10 w-10 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800"
            id="chat-submit-btn" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="w-5 h-5">
              <path d="m22 2-7 20-4-9-9-4Z"></path>
              <path d="M22 2 11 13"></path>
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>



<script>
  const chatBox = document.getElementById('chat-box');
  let offset = 0;
  const limit = 20;
  let loading = false;
  let allLoaded = false;  

  const form = document.getElementById('chat-form');
  const input = document.getElementById('chat-input');
  const button = document.getElementById('chat-submit-btn');
  const promptSuggestions = document.getElementById('prompt-suggestions')  // Add this for prompt suggestions div

  let lastMessageDate = null; // keep track of last rendered date
  let loadingBubble = null;


  const chatCount = <?php echo $chatCount; ?>;


  // Show assistant loading dots
  function showChatLoading() {
    loadingBubble = document.createElement('div');
    loadingBubble.className = 'flex justify-start';
    loadingBubble.innerHTML = `
      <div class="max-w-[75%] bg-orange-700 text-white rounded-lg px-4 py-2">
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      </div>
    `;
    chatBox.appendChild(loadingBubble);
    chatBox.scrollTop = chatBox.scrollHeight;
  }

  // Remove loading bubble
  function hideChatLoading() {
    if (loadingBubble) {
      loadingBubble.remove();
      loadingBubble = null;
    }
  }

  // Helper to format time
  function formatTime(dateStr) {
    const d = new Date(dateStr);
    return d.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  }

  // Helper to format date
  function formatDateHeader(dateStr) {
    const d = new Date(dateStr);
    const today = new Date();
    const yesterday = new Date();
    yesterday.setDate(today.getDate() - 1);

    const isToday = d.toDateString() === today.toDateString();
    const isYesterday = d.toDateString() === yesterday.toDateString();


    if (isToday) return "Today";
    if (isYesterday) return "Yesterday";

    // Example: October 5, 2025
    return d.toLocaleDateString([], { year: 'numeric', month: 'long', day: 'numeric' });
  }

  // Renders a date divider
  function renderDateDivider(dateStr, prepend = false) {
    const divider = document.createElement('div');
    // divider.className = "text-center text-gray-400 text-xs my-3";
    divider.className = "date-divider text-gray-400 text-xs my-3";
    divider.textContent = formatDateHeader(dateStr);
    
    if (prepend) {
      chatBox.prepend(divider);
    } else {
      chatBox.appendChild(divider);
    }
  }

  // Render one message
  function renderMessage(role, text, time = new Date(), prepend = false) {

    const currentDate = new Date(time).toDateString();
    
    // Add date divider if it's a new day
    if (!lastMessageDate || lastMessageDate !== currentDate) {
      renderDateDivider(time, prepend);
      lastMessageDate = currentDate;
    }

    const wrapper = document.createElement('div');
    const isUser = role === 'user';
    wrapper.className = `flex ${isUser ? 'justify-end' : 'justify-start'}`;

    wrapper.innerHTML = `
      <div class="max-w-[75%] ${isUser ? 'bg-gray-700 text-white' : 'bg-orange-700 text-white'} rounded-lg px-4 py-2">
        <div class="text-sm markdown-content">${marked.parse(text)}</div>
        <div class="text-xs text-gray-300 mt-1 text-right">${formatTime(time)}</div>
      </div>
    `;

    if (prepend) {
      chatBox.prepend(wrapper);
    } else {
      chatBox.appendChild(wrapper);
      chatBox.scrollTop = chatBox.scrollHeight;
    }
  }

  //Other Logic

  // Load chat history
  // Load next batch
  async function loadHistory(prepend = false, initialLoad = false) {

    if (loading || allLoaded) return;

    loading = true;

    const res = await fetch(`load_history.php?offset=${offset}`);

    const data = await res.json();
    if (data.error) {
      loading = false;
      return;
    }  

    if (data.length === 0) {
      allLoaded = true;
      loading = false;

      return;
    }

    if (prepend) {
      // For scroll-up loading
      const oldHeight = chatBox.scrollHeight;
      lastMessageDate = null; // reset for older messages
      data.reverse().forEach(msg => renderMessage(msg.role, msg.message, msg.created_at, true));
      chatBox.scrollTop = chatBox.scrollHeight - oldHeight;
    } else {
      // For first page load or new messages
      data.forEach(msg => renderMessage(msg.role, msg.message, msg.created_at, false));

      if (initialLoad) {
        // 👇 Scroll to bottom after initial load
        setTimeout(() => {
          chatBox.scrollTop = chatBox.scrollHeight;
        }, 100);
      }
    }

    offset += data.length;
    loading = false;

      //   data.forEach(msg => renderMessage(msg.role, msg.message, msg.created_at, prepend));
      //   offset += data.length;
      //   loading = false;
  }

  // Detect scroll to top → load older messages
  chatBox.addEventListener('scroll', () => {
    if (chatBox.scrollTop < 50 && !loading && !allLoaded) {
      const oldHeight = chatBox.scrollHeight;
      loadHistory(true).then(() => {
        chatBox.scrollTop = chatBox.scrollHeight - oldHeight; // maintain position
      });
    }
  });


  // Handle chat prompt suggestion click
  function startChat(prompt) {
      // Hide prompt suggestions once user starts chatting
      document.getElementById('prompt-suggestions').style.display = 'none';
      
      // Add the prompt as a message
      // renderMessage('user', prompt);
      
      // Send the prompt to the assistant as a message
      document.getElementById('chat-input').value = prompt;
      button.click();
  }

  // Handle new message
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const message = input.value.trim();
    if (!message) return;
    renderMessage('user', message);
    input.value = '';
    // button.disabled = true;

    showChatLoading();

    const res = await fetch('/A-R-Duty/dashboard/chat.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ message })
    });

    const data = await res.json();
    hideChatLoading();
    if (data.reply) {
      renderMessage('assistant', data.reply);
    } else {
      renderMessage('assistant', data.error || '⚠️ Error occurred');
    }

  });


  //Calls for functions
  window.addEventListener('load', async () => {
    await loadHistory(false, true); // load first batch and scroll to bottom
    if (chatCount === 0) {
      // Show prompt suggestions if no chats exist
      document.getElementById('prompt-suggestions').style.display = 'flex';
    }
    else{
      document.getElementById('prompt-suggestions').style.display = 'none';
    }

  });


</script>

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

<?php include '../includes/footer.php'; ?>

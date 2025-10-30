<?php
$title = "Help";
include 'includes/header.php';
?>

    <!-- Main Content -->
    <div class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <div
                    class="w-20 h-20 mx-auto mb-4 rounded-full bg-gradient-to-r from-orange-500 to-amber-500 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-white">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="m4.93 4.93 4.24 4.24"></path>
                        <path d="m14.83 9.17 4.24-4.24"></path>
                        <path d="m14.83 14.83 4.24 4.24"></path>
                        <path d="m9.17 14.83-4.24 4.24"></path>
                        <circle cx="12" cy="12" r="4"></circle>
                    </svg></div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6"><span class="gradient-text">Help &amp; Support</span></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Have questions? We're here to help. Find answers in our
                    FAQ or contact our support team.</p>
            </div>
            <div class="mb-16" style="opacity: 1; transform: none;">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="font-semibold tracking-tight text-2xl">Frequently Asked Questions</h3>
                        <p class="text-sm text-muted-foreground">Find quick answers to common questions.</p>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="relative mb-6"><input type="text"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-10"
                                placeholder="Search FAQs..." value=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg></div>
                        <div class="space-y-2">
                            <p class="text-center text-gray-400">No FAQs found matching your search.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm glass-effect border-white/10">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="font-semibold tracking-tight text-2xl">Contact Support</h3>
                        <p class="text-sm text-muted-foreground">Can't find an answer? Submit a support ticket.</p>
                    </div>
                    <div class="p-6 pt-0">
                        <form class="space-y-4">
                            <div><label for="subject"
                                    class="block text-sm font-medium text-gray-300 mb-1">Subject</label><input
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                    id="subject" placeholder="e.g., Issue with my subscription" value=""></div>
                            <div><label for="message"
                                    class="block text-sm font-medium text-gray-300 mb-1">Message</label><textarea
                                    class="flex min-h-[80px] w-full rounded-md border border-white/20 bg-black/30 px-3 py-2 text-sm text-white placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-orange-500 focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50"
                                    id="message" placeholder="Please describe your issue in detail..." rows="5"></textarea>
                            </div>
                            <div class="text-right"><button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium text-white bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 transition-colors h-10 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2"
                                    type="submit">Send Ticket<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-2">
                                        <path d="m22 2-7 20-4-9-9-4Z"></path>
                                        <path d="M22 2 11 13"></path>
                                    </svg></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
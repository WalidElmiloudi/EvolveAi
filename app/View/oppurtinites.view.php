<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>evolveAi Opportunities Desktop</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec37",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102213",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            .no-scrollbar::-webkit-scrollbar { display: none; }
            .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        }
        body {
            min-height: 100vh;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 flex overflow-hidden">
    <?php require_once "partials/sidebar.php" ?>
    <main class="flex-1 overflow-y-auto h-screen bg-slate-50/50 dark:bg-background-dark">
        <header
            class="sticky top-0 z-20 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl border-b border-slate-200 dark:border-slate-800 p-6">
            <div class="max-w-7xl mx-auto space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Explore Opportunities</h1>
                        <p class="text-slate-500 text-sm mt-1">Browse and apply to AI-driven income streams.</p>
                    </div>

                </div>
              
            </div>
        </header>
        <div class="max-w-7xl mx-auto p-6 md:p-8">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-2">
                    <span class="text-slate-900 dark:text-white font-bold text-lg">Featured Roles</span>
                    
                </div>
            
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                <div
                    class="group flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div class="relative aspect-[16/9] overflow-hidden">
                        <img alt="Job visual"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuClvdH4eV7UHu1XEiia6cZPyBljVptUquyQwxSB2zBrEyE01cH3ZglZGv9-TPr0dx_BLRoqpc68izpD8iimm-ihAYq8L_12irwPSU1Vi9oL_BnVPtj3DmWAEI7veoIYH9vtezKTB-EYSeEFYBFteE7MhzU4wa1DLmmY8EE5R5UyEhPFgnpsZdKIKIcbTYR1N5WWkmDWfVjj4kmlT3dMFdpOMAg1p5dku5VXEJ91UALFguX1iRBIdhxCOfg4edztSy1Lc_ugwwyN_w" />
                        <div class="absolute top-4 left-4">
                            <div
                                class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm border border-white/20">
                                <span class="text-primary font-bold text-base">$45/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Expert</span>
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Remote</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">Large Language
                            Model RLHF</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-3">Join our elite
                            training team to rank and refine human feedback data. You will be responsible for evaluating
                            AI responses and providing detailed corrections.</p>
                        <div
                            class="pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                    Commitment</p>
                                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">30-40 hrs/wk</p>
                            </div>
                            <button
                                class="bg-primary hover:bg-[#10d432] text-slate-900 font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div class="relative aspect-[16/9] overflow-hidden">
                        <img alt="Job visual"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_cRwaXxYT-Gq8U0Blrz6ozww2YMszPKqDAltudqXebNV-9xWdS3yWx6xDjwUy6oqlmbclkoalMfhBSCUwssBHWsKy9Cubx3WcnG-6sFdDfV0qupzEERGnpB9g4Mbc6rLOVUH30SiZeIUA1a4uRpMWRMj7sQdtuJkm4uH0M-b0JVtXKxbjLh74UqKLhVsBfRK8dzMTAREMibUDEZxopP7yLZnGGFkCI_B3Lqi87fX0NUBy4W0ZHzNjk7QEhzI4ZSWuJIvziDNmHw" />
                        <div class="absolute top-4 left-4">
                            <div
                                class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm border border-white/20">
                                <span class="text-primary font-bold text-base">$18/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Entry</span>
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Mobile</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">Visual Object
                            Labeling</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-3">Annotate urban
                            street images and video footage to help improve autonomous driving safety algorithms. Simple
                            interface, work from anywhere.</p>
                        <div
                            class="pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                    Commitment</p>
                                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">Flexible</p>
                            </div>
                            <button
                                class="bg-primary hover:bg-[#10d432] text-slate-900 font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div class="relative aspect-[16/9] overflow-hidden">
                        <img alt="Job visual"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBZ9lRkfwjvDeTLPuqf2PMx7-eOgiGNxIpy7pCes6DpJ4NQ-SUYI5_u0HrtJHDH0c14HbKlJjzJO6sSiQRjuWK4pSgOfMjKklpRCVXaJH1VoOcdWddYHNh3X0i-7HuSZaa7R7D_SfC7LTtC8PeYg6dsGTS4R9AeSSWwQgV-ZpWSWfb0oa77WS6ruh6S4kIja_jU1TzTIa31wIaMM8WcoGmAFM57SDPSJZft1EVYbUd2d0lyTmb2z9rNG8EIzO6gWHkzqrJK0zkDA" />
                        <div class="absolute top-4 left-4">
                            <div
                                class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm border border-white/20">
                                <span class="text-primary font-bold text-base">$60/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Technical</span>
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Hybrid</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">Prompt
                            Engineering Specialist</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-3">Design complex
                            multi-step prompt chains for enterprise marketing automation. Requires deep understanding of
                            LLM parameters and token optimization.</p>
                        <div
                            class="pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                    Commitment</p>
                                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">20 hrs/wk</p>
                            </div>
                            <button
                                class="bg-primary hover:bg-[#10d432] text-slate-900 font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div
                        class="relative aspect-[16/9] overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-slate-300 dark:text-slate-700">mic</span>
                        <div class="absolute top-4 left-4">
                            <div
                                class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm border border-white/20">
                                <span class="text-primary font-bold text-base">$30/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Creative</span>
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Remote</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">AI Voice
                            Synthesis Review</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-3">Audit synthesized
                            voice outputs for emotional nuance and phonetic accuracy. Native-level English required.</p>
                        <div
                            class="pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                    Commitment</p>
                                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">10-15 hrs/wk</p>
                            </div>
                            <button
                                class="bg-primary hover:bg-[#10d432] text-slate-900 font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div
                        class="relative aspect-[16/9] overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                        <span
                            class="material-symbols-outlined text-4xl text-slate-300 dark:text-slate-700">translate</span>
                        <div class="absolute top-4 left-4">
                            <div
                                class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm border border-white/20">
                                <span class="text-primary font-bold text-base">$35/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Intermediate</span>
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Remote</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">Multilingual
                            Dataset Curator</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-3">Curate and clean
                            high-quality datasets in Spanish, French, or Mandarin to improve translation models.</p>
                        <div
                            class="pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                    Commitment</p>
                                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">Full-time</p>
                            </div>
                            <button
                                class="bg-primary hover:bg-[#10d432] text-slate-900 font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div
                        class="relative aspect-[16/9] overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                        <span
                            class="material-symbols-outlined text-4xl text-slate-300 dark:text-slate-700">bug_report</span>
                        <div class="absolute top-4 left-4">
                            <div
                                class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm border border-white/20">
                                <span class="text-primary font-bold text-base">$28/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Technical</span>
                            <span
                                class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Remote</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 leading-tight">AI Hallucination
                            Tester</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 flex-1 line-clamp-3">Aggressively test
                            AI responses to identify factual errors, logic gaps, and unwanted hallucinations across
                            different models.</p>
                        <div
                            class="pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">
                                    Commitment</p>
                                <p class="text-sm font-semibold text-slate-700 dark:text-slate-200">Flexible</p>
                            </div>
                            <button
                                class="bg-primary hover:bg-[#10d432] text-slate-900 font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </main>

</body>

</html>
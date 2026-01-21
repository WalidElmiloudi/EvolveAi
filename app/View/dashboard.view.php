<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>evolveAi Desktop Dashboard View</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen font-display flex">
    <aside
        class="fixed left-0 top-0 h-screen w-64 bg-white dark:bg-zinc-950 border-r border-black/5 dark:border-white/5 flex flex-col z-50">
        <div class="p-6">
            <div class="flex items-center gap-3 mb-10">
                <div class="size-10 rounded-lg bg-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-black font-bold">bolt</span>
                </div>
                <span class="text-xl font-bold tracking-tight">evolveAi</span>
            </div>
            <nav>
                <ul class="flex flex-col gap-1">
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 bg-primary/10 text-primary transition-colors"
                            href="#">
                            <span class="material-symbols-outlined">dashboard</span>
                            <span class="font-bold">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-black/5 dark:hover:bg-white/5 transition-colors opacity-70 hover:opacity-100"
                            href="#">
                            <span class="material-symbols-outlined">assignment</span>
                            <span class="font-medium">Daily Plan</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-black/5 dark:hover:bg-white/5 transition-colors opacity-70 hover:opacity-100"
                            href="#">
                            <span class="material-symbols-outlined">auto_awesome</span>
                            <span class="font-medium">Opportunities</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-black/5 dark:hover:bg-white/5 transition-colors opacity-70 hover:opacity-100"
                            href="#">
                            <span class="material-symbols-outlined">psychology</span>
                            <span class="font-medium">Skills</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-black/5 dark:hover:bg-white/5 transition-colors opacity-70 hover:opacity-100"
                            href="#">
                            <span class="material-symbols-outlined">groups</span>
                            <span class="font-medium">Community</span>
                        </a>
                    </li>
                    <div class="my-4 border-t border-black/5 dark:border-white/5"></div>
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-black/5 dark:hover:bg-white/5 transition-colors opacity-70 hover:opacity-100"
                            href="#">
                            <span class="material-symbols-outlined">settings</span>
                            <span class="font-medium">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="mt-auto p-6">
            <div class="p-4 bg-primary/10 rounded-xl">
                <p class="text-[10px] font-bold uppercase tracking-wider text-primary mb-1">Pro Plan</p>
                <p class="text-xs opacity-80 mb-3">Unlock advanced AI mentorship</p>
                <button
                    class="w-full py-2 bg-primary text-black text-xs font-bold rounded-lg hover:brightness-95 transition-all">Upgrade
                    Now</button>
            </div>
        </div>
    </aside>
    <div class="flex-1 ml-64 min-h-screen flex flex-col">
        <header
            class="sticky top-0 z-40 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-black/5 dark:border-white/5 px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <span class="text-sm font-medium opacity-60">Dashboard / Overview</span>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 size-2 bg-primary rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-black/5 dark:border-white/5">
                    <div class="text-right">
                        <p class="text-sm font-bold">Alex Johnson</p>
                        <p class="text-[10px] opacity-60 uppercase font-bold tracking-tight">AI Engineer</p>
                    </div>
                    <div class="size-10 rounded-full bg-cover bg-center ring-2 ring-primary/20"
                        data-alt="User profile avatar circle"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAgfevj_Jdf128X156qf2YArdzp28BUmoAhXPRdhb58nd0ycRcK7edmIoK-dqOcrKJXmXxA1r2-nemRWAeLvp-lFaSkqrQNSX8AeMDCWvhL1R6OuZAtXxMRa3fxOn6ppMBYeQlC2oRn_kvCCvZh0wNKZ_jJj_akVcC2bTF3gWqWedTP9Ihb8rThHZ7n0TGRf3qV9k_x7zvvG9HsbVYITSZCsBga9CwXoZhr_PS4JQdMkk3akvOveDMsXQMH_4hHga1aDCYgqShrRg')">
                    </div>
                </div>
            </div>
        </header>
        <main class="p-8 max-w-7xl w-full mx-auto space-y-8">
            <div>
                <h1 class="text-3xl font-bold tracking-tight">Good morning, Alex</h1>
                <p class="text-base opacity-60 mt-1">Here is your progress report for today.</p>
            </div>
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 lg:col-span-8 space-y-6">
                    <section class="flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-xl">Daily Plan</h3>
                            <span class="text-xs font-bold bg-primary/20 text-primary px-3 py-1 rounded-full">65%
                                COMPLETED</span>
                        </div>
                        <div
                            class="bg-white dark:bg-zinc-900 rounded-2xl shadow-sm border border-black/5 dark:border-white/5 overflow-hidden">
                            <div class="h-64 w-full bg-cover bg-center relative"
                                data-alt="Abstract neural network visualization dark background"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBPgleMs_GJzDtdzYs7XqByx-2AyUYvlEpf1y3pA12BGymzYbHkfqoI1oI5zt4c-VnPEX3v7OVamaVh6n6EMVHqkvL7EObUh9ITiIhiQ3WKLlAWPuNiOB9icoR1ZJy5om_J6eQM1QxQAuAsudqiaSeZpD5MVWiSYmIpS3wt3O8oD2aZGMcTOkDnZLGyHFyQYtMrkUL2Kg0J05kvqRHmpX7i_1wLPHUmV6P-GG8fL6jxeegLpxNSHEIkyqsaxg25HVri-n_jkf0Zjw')">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-8">
                                    <div class="space-y-1">
                                        <p class="text-primary text-xs font-bold uppercase tracking-widest">Main
                                            Objective</p>
                                        <p class="text-white font-bold text-2xl">Mastering Neural Architectures &amp;
                                            Attention</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-8 space-y-6">
                                <div class="grid gap-3">
                                    <div
                                        class="flex items-start gap-4 p-4 rounded-xl bg-background-light dark:bg-white/5 border border-transparent hover:border-primary/20 transition-all cursor-pointer">
                                        <span class="material-symbols-outlined text-primary">check_circle</span>
                                        <div>
                                            <p class="text-base font-bold">Review Transformer Mathematics</p>
                                            <p class="text-sm opacity-60">Deep dive into multi-head attention scaling
                                                factors</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-start gap-4 p-4 rounded-xl bg-background-light dark:bg-white/5 border-l-4 border-primary shadow-sm">
                                        <span class="material-symbols-outlined opacity-20">radio_button_unchecked</span>
                                        <div>
                                            <p class="text-base font-bold">Code a Simple GPT Architecture</p>
                                            <p class="text-sm opacity-60">Hands-on implementation of self-attention in
                                                PyTorch</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-start gap-4 p-4 rounded-xl bg-background-light dark:bg-white/5 opacity-50">
                                        <span class="material-symbols-outlined opacity-20">radio_button_unchecked</span>
                                        <div>
                                            <p class="text-base font-bold">Ethics of Large Language Models</p>
                                            <p class="text-sm opacity-60">Read Chapter 4: Bias and Alignment of the AI
                                                Safety manual</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-6 pt-4">
                                    <div class="flex-1 space-y-2">
                                        <div
                                            class="flex justify-between text-xs font-bold uppercase tracking-wider opacity-60">
                                            <span>Session Progress</span>
                                            <span>4 of 6 units completed</span>
                                        </div>
                                        <div
                                            class="h-2 w-full bg-black/10 dark:bg-white/10 rounded-full overflow-hidden">
                                            <div class="h-full bg-primary rounded-full transition-all duration-1000"
                                                style="width: 66%"></div>
                                        </div>
                                    </div>
                                    <button
                                        class="bg-primary text-black font-bold px-8 py-3 rounded-xl flex items-center justify-center gap-3 hover:scale-[1.02] active:scale-[0.98] transition-all shadow-lg shadow-primary/10">
                                        <span>Continue Session</span>
                                        <span class="material-symbols-outlined text-[20px]">play_arrow</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-span-12 lg:col-span-4 space-y-8">
                    <section>
                        <h3 class="font-bold text-xl mb-6">Skill Badges</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-2xl border border-black/5 dark:border-white/5 flex flex-col items-center gap-3 hover:shadow-md transition-shadow">
                                <div
                                    class="size-16 rounded-full bg-primary/20 flex items-center justify-center border-2 border-primary">
                                    <span class="material-symbols-outlined text-primary text-3xl">psychology</span>
                                </div>
                                <span class="text-[10px] font-bold text-center uppercase tracking-wider">Logic
                                    Master</span>
                            </div>
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-2xl border border-black/5 dark:border-white/5 flex flex-col items-center gap-3 hover:shadow-md transition-shadow">
                                <div
                                    class="size-16 rounded-full bg-blue-500/20 flex items-center justify-center border-2 border-blue-500">
                                    <span class="material-symbols-outlined text-blue-500 text-3xl">explore</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-center uppercase tracking-wider">Navigator</span>
                            </div>
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-2xl border border-black/5 dark:border-white/5 flex flex-col items-center gap-3 hover:shadow-md transition-shadow">
                                <div
                                    class="size-16 rounded-full bg-orange-500/20 flex items-center justify-center border-2 border-orange-500">
                                    <span
                                        class="material-symbols-outlined text-orange-500 text-3xl">local_fire_department</span>
                                </div>
                                <span class="text-[10px] font-bold text-center uppercase tracking-wider">Streak
                                    King</span>
                            </div>
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-2xl border border-black/5 dark:border-white/5 flex flex-col items-center gap-3 opacity-40">
                                <div
                                    class="size-16 rounded-full bg-slate-500/10 flex items-center justify-center border-2 border-dashed border-slate-500/30">
                                    <span class="material-symbols-outlined text-slate-500/30 text-3xl">lock</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-center uppercase tracking-wider">Visionary</span>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3 class="font-bold text-xl mb-6">Recent Activity</h3>
                        <div class="space-y-3">
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/30 transition-colors">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="size-10 bg-indigo-500/10 text-indigo-500 flex items-center justify-center rounded-lg group-hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined">data_object</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">Python Mastery</p>
                                        <p class="text-xs opacity-60">2 hours today</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-primary text-sm font-bold">+12%</p>
                                    <p class="text-[10px] opacity-40 uppercase">growth</p>
                                </div>
                            </div>
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/30 transition-colors">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="size-10 bg-emerald-500/10 text-emerald-500 flex items-center justify-center rounded-lg group-hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined">terminal</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">NLP Basics</p>
                                        <p class="text-xs opacity-60">45 mins today</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-primary text-sm font-bold">+5%</p>
                                    <p class="text-[10px] opacity-40 uppercase">growth</p>
                                </div>
                            </div>
                            <div
                                class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/30 transition-colors">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="size-10 bg-amber-500/10 text-amber-500 flex items-center justify-center rounded-lg group-hover:scale-110 transition-transform">
                                        <span class="material-symbols-outlined">analytics</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">Data Viz</p>
                                        <p class="text-xs opacity-60">Last seen: 2d ago</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-slate-400 text-sm font-bold">0%</p>
                                    <p class="text-[10px] opacity-40 uppercase">steady</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
    <button
        class="fixed bottom-8 right-8 size-16 bg-primary text-black rounded-full shadow-2xl flex items-center justify-center active:scale-95 hover:scale-110 transition-all z-40">
        <span class="material-symbols-outlined text-3xl font-bold">auto_awesome</span>
    </button>

</body>

</html>
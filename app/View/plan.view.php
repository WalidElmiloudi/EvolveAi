<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>evolveAi - Daily Plan</title>
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
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen font-display flex">
    <?php require_once "./partials/sidbar.php"?>
    <!-- <aside
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
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 hover:bg-black/5 dark:hover:bg-white/5 transition-colors opacity-70 hover:opacity-100"
                            href="#">
                            <span class="material-symbols-outlined">dashboard</span>
                            <span class="font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-3 rounded-lg px-4 py-3 bg-primary/10 text-primary transition-colors"
                            href="#">
                            <span class="material-symbols-outlined">assignment</span>
                            <span class="font-bold">Daily Plan</span>
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
    </aside> -->
    <div class="flex-1 ml-64 min-h-screen flex flex-col">
        <header
            class="sticky top-0 z-40 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-black/5 dark:border-white/5 px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <span class="text-sm font-medium opacity-60">Daily Plan / Today</span>
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
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAJKYPQgL0KUPVgqtGwcKhHeShFlgo2htXUgbuHzLBU5vKYAHbLhFddIdVR85ez3V9Etm19Lk4TNHcW_mEN1FVA1WYNm6qKIVxDRKYIE7W-fYlyKlWvfaeo4SSFQnpB-Qvdfcn0nLXy_knL0t9xsa9WT_3jX5DWphm3rigth938xC9Kip0CHoWDwTVnrqvO_BE6KNTThfsYCOa-h9eULijhbzW5pRxUFXoGku5vQEf_IN-y4o9XafGvV4WDXSGax9uukRkBNez8yw')">
                    </div>
                </div>
            </div>
        </header>
        <main class="p-8 max-w-5xl w-full mx-auto space-y-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h1 class="text-4xl font-extrabold tracking-tight">Your Daily Plan</h1>
                    <p class="text-lg opacity-60 mt-2">Focused steps to achieve your $10k/mo income goal.</p>
                </div>
                <div
                    class="flex items-center gap-2 text-sm font-bold bg-white dark:bg-zinc-900 px-4 py-2 rounded-lg border border-black/5 dark:border-white/5">
                    <span class="material-symbols-outlined text-primary">calendar_today</span>
                    <span>October 24, 2023</span>
                </div>
            </div>
            <div class="bg-white dark:bg-zinc-900 p-6 rounded-2xl border border-black/5 dark:border-white/5 shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-sm uppercase tracking-widest opacity-60">Today's Completion</h3>
                    <span class="text-primary font-bold">60%</span>
                </div>
                <div class="h-3 w-full bg-black/5 dark:bg-white/5 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full" style="width: 60%"></div>
                </div>
            </div>
            <div class="space-y-4">
                <div
                    class="bg-white dark:bg-zinc-900 p-6 rounded-2xl border border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/40 transition-all">
                    <div class="flex items-start gap-6">
                        <div class="flex items-center h-6">
                            <input checked=""
                                class="size-6 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
                                type="checkbox" />
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-3">
                                <h4 class="text-lg font-bold line-through opacity-50">Mastering Transformer
                                    Architectures</h4>
                                <span
                                    class="text-[10px] font-bold px-2 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-600 rounded-full uppercase">Technical</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm opacity-50">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 45 mins
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">trending_up</span> Hard
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined opacity-40">more_vert</span>
                    </button>
                </div>
                <div
                    class="bg-white dark:bg-zinc-900 p-6 rounded-2xl border-l-4 border-l-primary border-y border-r border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/40 transition-all shadow-md">
                    <div class="flex items-start gap-6">
                        <div class="flex items-center h-6">
                            <input
                                class="size-6 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
                                type="checkbox" />
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-3">
                                <h4 class="text-lg font-bold">Optimizing Prompt Injection Defense</h4>
                                <span
                                    class="text-[10px] font-bold px-2 py-0.5 bg-primary/20 text-primary rounded-full uppercase">Security</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm opacity-60">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 30 mins
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">trending_up</span> Medium
                                </span>
                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-primary text-black font-bold px-4 py-2 rounded-lg text-sm hover:scale-105 transition-transform">
                        Start Now
                    </button>
                </div>
                <div
                    class="bg-white dark:bg-zinc-900 p-6 rounded-2xl border border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/40 transition-all">
                    <div class="flex items-start gap-6">
                        <div class="flex items-center h-6">
                            <input
                                class="size-6 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
                                type="checkbox" />
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-3">
                                <h4 class="text-lg font-bold">Market Analysis: AI Voiceover Niche</h4>
                                <span
                                    class="text-[10px] font-bold px-2 py-0.5 bg-amber-100 dark:bg-amber-900/30 text-amber-600 rounded-full uppercase">Business</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm opacity-60">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 60 mins
                                </span>
                                <span class="flex items-center gap-1 text-primary">
                                    <span class="material-symbols-outlined text-sm">payments</span> High ROI
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined opacity-40">more_vert</span>
                    </button>
                </div>
                <div
                    class="bg-white dark:bg-zinc-900 p-6 rounded-2xl border border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/40 transition-all">
                    <div class="flex items-start gap-6">
                        <div class="flex items-center h-6">
                            <input
                                class="size-6 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
                                type="checkbox" />
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-3">
                                <h4 class="text-lg font-bold">Networking: Connect with 3 AI Founders</h4>
                                <span
                                    class="text-[10px] font-bold px-2 py-0.5 bg-purple-100 dark:bg-purple-900/30 text-purple-600 rounded-full uppercase">Community</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm opacity-60">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 20 mins
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined opacity-40">more_vert</span>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="bg-primary/5 p-4 rounded-xl border border-primary/10">
                    <p class="text-[10px] font-bold uppercase tracking-widest opacity-60 mb-1">Estimated Finish</p>
                    <p class="text-xl font-bold">1:45 PM</p>
                </div>
                <div class="bg-primary/5 p-4 rounded-xl border border-primary/10">
                    <p class="text-[10px] font-bold uppercase tracking-widest opacity-60 mb-1">Time Invested</p>
                    <p class="text-xl font-bold">2.5 hrs</p>
                </div>
                <div class="bg-primary/5 p-4 rounded-xl border border-primary/10">
                    <p class="text-[10px] font-bold uppercase tracking-widest opacity-60 mb-1">Streak</p>
                    <p class="text-xl font-bold flex items-center gap-2">
                        12 Days <span class="material-symbols-outlined text-orange-500">local_fire_department</span>
                    </p>
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
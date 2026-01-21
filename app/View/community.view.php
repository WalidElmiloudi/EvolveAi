<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>evolveAi Community Desktop View</title>
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
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen font-display flex">
<?php require_once "partials/sidebar.php" ?>
    <div class="flex-1 ml-64 min-h-screen flex flex-col">
        <header
            class="sticky top-0 z-40 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-black/5 dark:border-white/5 px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <span class="text-sm font-medium opacity-60">Community / Activity Feed</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative group">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 opacity-40">search</span>
                    <input
                        class="bg-black/5 dark:bg-white/5 border-none rounded-full pl-10 pr-4 py-1.5 text-sm w-64 focus:ring-1 focus:ring-primary/50 transition-all"
                        placeholder="Search community..." type="text" />
                </div>
                <button class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 size-2 bg-primary rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-black/5 dark:border-white/5">
                    <div class="size-10 rounded-full bg-cover bg-center ring-2 ring-primary/20"
                        data-alt="User profile avatar circle"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAgfevj_Jdf128X156qf2YArdzp28BUmoAhXPRdhb58nd0ycRcK7edmIoK-dqOcrKJXmXxA1r2-nemRWAeLvp-lFaSkqrQNSX8AeMDCWvhL1R6OuZAtXxMRa3fxOn6ppMBYeQlC2oRn_kvCCvZh0wNKZ_jJj_akVcC2bTF3gWqWedTP9Ihb8rThHZ7n0TGRf3qV9k_x7zvvG9HsbVYITSZCsBga9CwXoZhr_PS4JQdMkk3akvOveDMsXQMH_4hHga1aDCYgqShrRg')">
                    </div>
                </div>
            </div>
        </header>
        <main class="p-8 max-w-7xl w-full mx-auto">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-12 lg:col-span-8 space-y-6">
                    <div
                        class="bg-white dark:bg-zinc-900 rounded-2xl p-6 border border-black/5 dark:border-white/5 shadow-sm">
                        <div class="flex gap-4">
                            <div class="size-12 rounded-full bg-cover bg-center shrink-0"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAgfevj_Jdf128X156qf2YArdzp28BUmoAhXPRdhb58nd0ycRcK7edmIoK-dqOcrKJXmXxA1r2-nemRWAeLvp-lFaSkqrQNSX8AeMDCWvhL1R6OuZAtXxMRa3fxOn6ppMBYeQlC2oRn_kvCCvZh0wNKZ_jJj_akVcC2bTF3gWqWedTP9Ihb8rThHZ7n0TGRf3qV9k_x7zvvG9HsbVYITSZCsBga9CwXoZhr_PS4JQdMkk3akvOveDMsXQMH_4hHga1aDCYgqShrRg')">
                            </div>
                            <div class="flex-1">
                                <textarea
                                    class="w-full bg-background-light dark:bg-white/5 border-none rounded-xl p-4 text-sm focus:ring-1 focus:ring-primary/30 resize-none min-h-[100px]"
                                    placeholder="What's on your mind?"></textarea>
                                <div class="flex items-center justify-between mt-4">
                                    <div class="flex items-center gap-4">
                                        <button
                                            class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 transition-opacity">
                                            <span class="material-symbols-outlined text-lg">image</span> Photo
                                        </button>
                                        <button
                                            class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 transition-opacity">
                                            <span class="material-symbols-outlined text-lg">videocam</span> Video
                                        </button>
                                        <button
                                            class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 transition-opacity">
                                            <span class="material-symbols-outlined text-lg">link</span> Link
                                        </button>
                                    </div>
                                    <button
                                        class="bg-primary text-black font-bold px-6 py-2 rounded-lg hover:brightness-95 transition-all text-sm">
                                        Post Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div
                            class="bg-white dark:bg-zinc-900 rounded-2xl border border-black/5 dark:border-white/5 shadow-sm overflow-hidden">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-cover bg-center"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBoSByF0I3vGXR1hVVeOsFhfFSBFKme9B3dY2iWuzpqvuUOnXtxoGQIcGM74QzJI2qgXCREH2IqmjPmyBxDD707leEAQb5YEYjot40-f1ZUrL5yXqllRjKdd3US9rCEhwvNXDp3UCnmmTboRHgWlki0B0iyFl5nGNocEenU3aFCQxPX7fqGRzZ66q8YwAHYjwGzsNNicb85Hu5JOT7T99r33D9jyPr3HDxPYTfq2dCOMiE5OmFM2cQpAbaGfcs0zjAewfj-Zhgv3Q')">
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm">Sarah Chen</p>
                                            <p class="text-[10px] opacity-50 uppercase font-bold tracking-tight">Data
                                                Scientist • 2h ago</p>
                                        </div>
                                    </div>
                                    <button class="opacity-40 hover:opacity-100"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </div>
                                <p class="text-sm leading-relaxed mb-4">
                                    Just finished the "Advanced Neural Architectures" module. The section on multi-head
                                    attention mechanisms was a total game-changer for my current project! 🚀 #AI
                                    #LearningPath
                                </p>
                                <div class="h-64 rounded-xl bg-cover bg-center mb-4"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBPgleMs_GJzDtdzYs7XqByx-2AyUYvlEpf1y3pA12BGymzYbHkfqoI1oI5zt4c-VnPEX3v7OVamaVh6n6EMVHqkvL7EObUh9ITiIhiQ3WKLlAWPuNiOB9icoR1ZJy5om_J6eQM1QxQAuAsudqiaSeZpD5MVWiSYmIpS3wt3O8oD2aZGMcTOkDnZLGyHFyQYtMrkUL2Kg0J05kvqRHmpX7i_1wLPHUmV6P-GG8fL6jxeegLpxNSHEIkyqsaxg25HVri-n_jkf0Zjw')">
                                </div>
                                <div class="flex items-center gap-6 pt-4 border-t border-black/5 dark:border-white/5">
                                    <button class="flex items-center gap-2 text-xs font-bold text-primary group">
                                        <span class="material-symbols-outlined text-lg"
                                            style="font-variation-settings: 'FILL' 1">thumb_up</span> 24 Likes
                                    </button>
                                    <button
                                        class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100">
                                        <span class="material-symbols-outlined text-lg">chat_bubble</span> 8 Comments
                                    </button>
                                    <button
                                        class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 ml-auto">
                                        <span class="material-symbols-outlined text-lg">share</span> Share
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-white dark:bg-zinc-900 rounded-2xl border border-black/5 dark:border-white/5 shadow-sm">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-full bg-cover bg-center"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCXKf2zsz-1oiz7MwTkT0I_GYLCYfZccwCneUDGJCYWnr3AYS454qEuitnXKG9HAj9eQ0AWtfuFobDtFaDvf8NFOK95rIkM_1jH9TX0OjHDtbLuAxlg90NKgXE88n-iZExT6yyzzQW3Eo4CsVXshbneIjcIHgsqnZNIxnBgB540G2pMpe2rFDdjiQ4xdj1lDuNKA4T0szf0Dmwot7fYHFdHoPZNUEJVbeRn2FmSBj50P8d2jtjy9tQsZRfy0nSsESlFkFeznBusDw')">
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm">Marcus Thorne</p>
                                            <p class="text-[10px] opacity-50 uppercase font-bold tracking-tight">Full
                                                Stack Developer • 5h ago</p>
                                        </div>
                                    </div>
                                    <button class="opacity-40 hover:opacity-100"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </div>
                                <p class="text-sm leading-relaxed mb-4">
                                    Does anyone have recommendations for stable diffusion prompts specifically for UI/UX
                                    wireframing? Trying to speed up my ideation phase.
                                </p>
                                <div class="flex items-center gap-6 pt-4 border-t border-black/5 dark:border-white/5">
                                    <button
                                        class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 group">
                                        <span class="material-symbols-outlined text-lg">thumb_up</span> 12 Likes
                                    </button>
                                    <button
                                        class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100">
                                        <span class="material-symbols-outlined text-lg">chat_bubble</span> 15 Comments
                                    </button>
                                    <button
                                        class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 ml-auto">
                                        <span class="material-symbols-outlined text-lg">share</span> Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4 space-y-8">
                    <section
                        class="bg-white dark:bg-zinc-900 rounded-2xl p-6 border border-black/5 dark:border-white/5 shadow-sm">
                        <h3 class="font-bold text-lg mb-6">Trending Skills</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary text-sm">auto_awesome</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">Prompt Engineering</p>
                                        <p class="text-[10px] opacity-50 font-bold uppercase tracking-tight">4.2k Active
                                        </p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-primary text-sm">trending_up</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-blue-500/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-blue-500 text-sm">database</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">Vector Databases</p>
                                        <p class="text-[10px] opacity-50 font-bold uppercase tracking-tight">2.8k Active
                                        </p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-primary text-sm">trending_up</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="size-8 rounded bg-purple-500/10 flex items-center justify-center">
                                        <span
                                            class="material-symbols-outlined text-purple-500 text-sm">model_training</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold">Fine-tuning LLMs</p>
                                        <p class="text-[10px] opacity-50 font-bold uppercase tracking-tight">1.5k Active
                                        </p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-primary text-sm">trending_up</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 py-2 border border-black/5 dark:border-white/10 rounded-lg text-xs font-bold hover:bg-black/5 dark:hover:bg-white/5 transition-all">View
                            All Skills</button>
                    </section>
                    <section
                        class="bg-white dark:bg-zinc-900 rounded-2xl p-6 border border-black/5 dark:border-white/5 shadow-sm">
                        <h3 class="font-bold text-lg mb-6">Top Contributors</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-full bg-cover bg-center"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCJ7ae9Ase8a-OMABgVNtQfxv0breyp1XFN2PYZ2SBOtiCPuP1iO9FTTYbs_ZaQVbZxSN8PJFYpgVi54jjhsNCFS6QH9BoLqgeMOfQwk166oXxIt-j6z9zHURKq0qwoB0d29dSPxf09Keddbj66VTGQI-Ha6iuX0NL4bpzFrroXGeWBj6CI5cdqnnschT0jwSiG5rTBuG1hheVUBxKrdFf1cpAXU9HXjsUvbrlZJz6AROn8kxjUCIzOPosSzf9xPm4zg-S6vvsgig')">
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">David Miller</p>
                                    <p class="text-[10px] opacity-50 font-bold uppercase tracking-tight">Master AI
                                        Architect</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs font-bold text-primary">1.2k</p>
                                    <p class="text-[8px] opacity-40 uppercase font-bold tracking-widest">Points</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-full bg-cover bg-center"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBj2CO1Q0oMdK4Zgxkrkt5PufvMFqLO9liA0u7mqBLTwskWNH3Z9F6FjiJIfpP8gc5oPD_YMOtqlp_4lBUNFjDyby5WyEnKc7SnlzomWOua_5Vv_w24N3u60frPYvGRJwyzdMOhPMWaEbkowcFQZBO2SQuxcIn7sa19AK_sM33Qw_LxtKNEwB1YLe_cLjCvG2b--6Tc5Vxow7C5bnfFDrVISlXIYubLhsH9iHfbsQWeh92vLwBEnsqCkfWD9UEXrCM4XXK-sGEAmQ')">
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Elena Rodriguez</p>
                                    <p class="text-[10px] opacity-50 font-bold uppercase tracking-tight">NLP Specialist
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs font-bold text-primary">980</p>
                                    <p class="text-[8px] opacity-40 uppercase font-bold tracking-widest">Points</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-full bg-cover bg-center"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCMeaXqYvH_blZgHtBo3i6y29_BcJss_YHHPNtmT0qIYubJL8rzkk4QVymDiU-BUDSWilJbjSrPIebYjwXItxyL0FSg4YHX9W6wfUHhJnbVf_mfQRrZLMLOFVvOOJZNz8u7E-6K-Xzj9lMw_CHjHFYK3SO4wg4QzoIWOS4i4YENJPOyTuF33pZt5GJbGly_kh4cwRPgpKOZe0fsOmkhz-olRN1-y3ifjXdMLv7KMaVEKghLhzrCpoD6vu78HgXdi3NWf4qntm1Tjw')">
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Jordan Smith</p>
                                    <p class="text-[10px] opacity-50 font-bold uppercase tracking-tight">ML Engineer</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs font-bold text-primary">854</p>
                                    <p class="text-[8px] opacity-40 uppercase font-bold tracking-widest">Points</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 py-2 bg-black/5 dark:bg-white/5 rounded-lg text-xs font-bold hover:brightness-95 transition-all">Leaderboard</button>
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
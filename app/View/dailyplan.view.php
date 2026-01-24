<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

use App\Services\AiService;

$tasksClass = new AiService;

$jsonResponse = $tasksClass->fetchGeminiResponse();
$tasks = json_decode($jsonResponse , true);

?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>evolveAi - Daily Plan</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
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

        body {
            min-height: 100vh;
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
                <span class="text-sm font-medium opacity-60">Daily Plan / Today</span>
            </div>
            <div class="flex items-center gap-4">

                <div class="flex items-center gap-3 pl-4 border-l border-black/5 dark:border-white/5">
                    <div class="text-right">
                        <p class="text-sm font-bold"><?= $_SESSION['username'] ?><</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="p-8 max-w-5xl w-full mx-auto space-y-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h1 class="text-4xl font-extrabold tracking-tight">Your Daily Plan</h1>
                    <p class="text-lg opacity-60 mt-2">Focused steps to achieve your income goal.</p>
                </div>
                <div
                    class="flex items-center gap-2 text-sm font-bold bg-white dark:bg-zinc-900 px-4 py-2 rounded-lg border border-black/5 dark:border-white/5">
                    <span class="material-symbols-outlined text-primary">calendar_today</span>
                    <span>October 24, 2023</span>
                </div>
            </div>


            <div class="space-y-4     tasks">
                <?php foreach($tasks as $task): ?>
                <div
                    class="bg-white dark:bg-zinc-900 p-6 rounded-2xl border-l-4 border-l-primary border-y border-r border-black/5 dark:border-white/5 flex items-center justify-between group hover:border-primary/40 transition-all shadow-md cursor-default">
                    <div class="flex items-start gap-6 w-full">
                        <div class="flex items-center h-6">
                            <input
                                class="size-6 rounded border-slate-300 text-primary focus:ring-primary cursor-pointer"
                                type="checkbox" />
                        </div>
                        <div class="space-y-1 w-full">
                            <div class="flex items-center gap-3">
                                <h4 class="text-lg font-bold"><?= $task['title']; ?></h4>
                            </div>

                            <div class="flex items-center gap-4 text-sm opacity-60">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 30 mins
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">trending_up</span> <?= $task['priority']; ?>
                                </span>
                            </div>

                            <p
                                class="text-sm text-slate-500 dark:text-slate-400 max-h-0 opacity-0 overflow-hidden group-hover:max-h-24 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                                <br>
                                <?= $task['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pt-4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold tracking-tight">Plan Resources</h2>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div
                        class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-black/5 dark:border-white/5 flex items-center gap-4 group hover:border-primary/40 transition-all cursor-pointer">
                        <div
                            class="size-12 rounded-lg bg-red-50 dark:bg-red-900/20 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-red-500">picture_as_pdf</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-sm truncate">Transformer_Architecture_v3.pdf</h4>
                            <p class="text-xs opacity-50 mt-0.5 flex items-center gap-2">
                                <span>2.4 MB</span>
                                <span class="size-1 rounded-full bg-slate-300"></span>
                                <span>Updated 2h ago</span>
                            </p>
                        </div>
                        <button
                            class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="material-symbols-outlined">download</span>
                        </button>
                    </div>

                    <div
                        class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-black/5 dark:border-white/5 flex items-center gap-4 group hover:border-primary/40 transition-all cursor-pointer">
                        <div
                            class="size-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-blue-500">link</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-sm truncate">HuggingFace Dataset: Common Voice</h4>
                            <p class="text-xs opacity-50 mt-0.5 flex items-center gap-2">
                                <span>External Link</span>
                            </p>
                        </div>
                        <button
                            class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="material-symbols-outlined">open_in_new</span>
                        </button>
                    </div>

                    <div
                        class="bg-white dark:bg-zinc-900 p-4 rounded-xl border border-black/5 dark:border-white/5 flex items-center gap-4 group hover:border-primary/40 transition-all cursor-pointer">
                        <div
                            class="size-12 rounded-lg bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-600 dark:text-slate-400">code</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-sm truncate">Prompt-Injection-Defense-Repo</h4>
                            <p class="text-xs opacity-50 mt-0.5 flex items-center gap-2">
                                <span>GitHub</span>
                                <span class="size-1 rounded-full bg-slate-300"></span>
                                <span>Private</span>
                            </p>
                        </div>
                        <button
                            class="p-2 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>


        </main>
    </div>


</body>

</html>
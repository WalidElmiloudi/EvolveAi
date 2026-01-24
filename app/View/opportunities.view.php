<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>evolveAi Opportunities</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
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
                <span class="text-sm font-medium opacity-60">Opportunities</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-3 pl-4 border-l border-black/5 dark:border-white/5">
                    <div class="text-right">
                        <p class="text-sm font-bold"><?= $_SESSION['username'] ?></p>
                    </div>
                </div>
            </div>
        </header>

        <main class="p-8 max-w-7xl w-full mx-auto">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-4xl font-extrabold tracking-tight">Explore Opportunities</h1>
                    <p class="text-lg opacity-60 mt-2">High-value contracts matched to your skills.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

                <!-- card -->

                <div class="group flex flex-col bg-white dark:bg-zinc-900 rounded-2xl border border-black/5 dark:border-white/5 shadow-sm hover:shadow-xl hover:border-primary/30 transition-all duration-300 overflow-hidden">
                    <div class="relative aspect-[16/9] overflow-hidden">
                        <img alt="Job visual" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuClvdH4eV7UHu1XEiia6cZPyBljVptUquyQwxSB2zBrEyE01cH3ZglZGv9-TPr0dx_BLRoqpc68izpD8iimm-ihAYq8L_12irwPSU1Vi9oL_BnVPtj3DmWAEI7veoIYH9vtezKTB-EYSeEFYBFteE7MhzU4wa1DLmmY8EE5R5UyEhPFgnpsZdKIKIcbTYR1N5WWkmDWfVjj4kmlT3dMFdpOMAg1p5dku5VXEJ91UALFguX1iRBIdhxCOfg4edztSy1Lc_ugwwyN_w" />
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex gap-2 mb-4">
                            <span class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Data science</span>
                            <span class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-md">Remote</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 leading-tight">Large Language Model RLHF</h3>
                        <p class="text-sm opacity-60 mb-6 flex-1 line-clamp-3">Join our elite training team to rank and refine human feedback data. You will be responsible for evaluating AI responses.</p>
                        <div class="pt-6 border-t border-black/5 dark:border-white/5">
                            <button class="w-full bg-primary text-black font-bold px-6 py-2.5 rounded-xl text-sm transition-colors shadow-sm hover:brightness-95">got to</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
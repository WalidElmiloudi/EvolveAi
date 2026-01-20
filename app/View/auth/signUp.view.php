<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register Account</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
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

        .bg-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(19, 236, 55, 0.05) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display bg-pattern">
    <header class="p-6 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="size-8 bg-primary rounded-lg flex items-center justify-center">
                <span class="material-symbols-outlined text-black font-bold text-xl">bolt</span>
            </div>
            <span class="text-slate-900 dark:text-white font-bold text-xl tracking-tight">AI Grow</span>
        </div>
        <a class="text-primary text-sm font-semibold" href="#">Sign In</a>
    </header>
    <main class="flex-1 px-6 flex flex-col justify-center max-w-md mx-auto w-full">
        <div class="mb-8">
            <h1 class="text-slate-900 dark:text-white text-3xl font-bold tracking-tight">Create your account</h1>
            <p class="text-slate-600 dark:text-slate-400 mt-2">Start generating income with AI-driven insights tailored for you.</p>
        </div>
        <div class="bg-white dark:bg-slate-900/50 backdrop-blur-sm border border-slate-200 dark:border-slate-800 p-6 rounded-2xl shadow-sm">
            <form method="POST" action="/EvolveAi/auth/register" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5" for="fullname">Full Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 text-xl">person</span>
                        </div>
                        <input
                            name="username"
                            class="block w-full pl-10 pr-3 py-3 border border-slate-200 dark:border-slate-700 rounded-xl bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                            id="fullname"
                            placeholder="Enter your full name"
                            type="text"
                            required />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5" for="email">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 text-xl">mail</span>
                        </div>
                        <input
                            name="email"
                            class="block w-full pl-10 pr-3 py-3 border border-slate-200 dark:border-slate-700 rounded-xl bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                            id="email"
                            placeholder="name@company.com"
                            type="email"
                            required />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5" for="password">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 text-xl">lock</span>
                        </div>
                        <input
                            name="password"
                            class="block w-full pl-10 pr-10 py-3 border border-slate-200 dark:border-slate-700 rounded-xl bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none"
                            id="password"
                            placeholder="••••••••"
                            type="password"
                            required />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                            <span class="material-symbols-outlined text-slate-400 text-xl hover:text-slate-600">visibility</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-2 mt-2">
                    <input
                        name="terms"
                        class="rounded border-slate-300 text-primary focus:ring-primary bg-slate-50"
                        id="terms"
                        type="checkbox"
                        required />
                    <label class="text-xs text-slate-500 dark:text-slate-400" for="terms">
                        I agree to the <a class="text-primary underline" href="#">Terms of Service</a>
                    </label>
                </div>

                <button
                    type="submit"
                    class="w-full h-14 bg-primary text-black font-bold text-lg rounded-xl shadow-lg shadow-primary/20 flex items-center justify-center gap-2 active:scale-[0.98] transition-transform mt-6">
                    Create Account
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </form>

            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-200 dark:border-slate-800"></div>
                </div>
                <div class="relative flex justify-center text-xs uppercase">
                    <span class="bg-white dark:bg-slate-900 px-2 text-slate-400">Or sign up with</span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <button class="flex items-center justify-center gap-2 h-12 border border-slate-200 dark:border-slate-800 rounded-xl bg-white dark:bg-slate-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                    </svg>
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Google</span>
                </button>
                <button class="flex items-center justify-center gap-2 h-12 border border-slate-200 dark:border-slate-800 rounded-xl bg-white dark:bg-slate-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="#0077B5" viewBox="0 0 24 24">
                        <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"></path>
                    </svg>
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">LinkedIn</span>
                </button>
            </div>
        </div>
        <div class="mt-8 flex items-center justify-center gap-2">
            <span class="material-symbols-outlined text-primary text-sm">auto_graph</span>
            <p class="text-slate-500 dark:text-slate-400 text-xs font-medium">Join 24,000+ AI-powered entrepreneurs today</p>
        </div>
    </main>
    <footer class="p-6 text-center">
        <p class="text-slate-400 text-xs">By signing up, you agree to our Terms and Data Policy.</p>
    </footer>

</body>

</html>
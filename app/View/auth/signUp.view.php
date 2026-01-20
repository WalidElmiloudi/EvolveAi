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
            <span class="text-slate-900 dark:text-white font-bold text-xl tracking-tight">evolveAi</span>
        </div>
<<<<<<< HEAD
        <a class="text-primary text-sm font-semibold" href="/EvolveAi/auth/showLogin/">Sign In</a>
=======
          <form action="/EvolveAi/auth/showlogin">
                    <button type="submit"  class="text-primary text-sm font-semibold">Sign In</button>
                </form>
>>>>>>> aef8e19629e304ba0468fe2e6a5317fc09e2668c
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
        class="w-full h-14 bg-primary text-black font-bold text-lg rounded-xl shadow-lg shadow-primary/20 flex items-center justify-center gap-2 active:scale-[0.98] transition-transform mt-6"
    >
        Create Account
        <span class="material-symbols-outlined">arrow_forward</span>
    </button>


  
</form>

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
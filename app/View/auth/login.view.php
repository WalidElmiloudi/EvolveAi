<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - AI Income Platform</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Top App Bar (iOS Style) -->
        <div class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 justify-between sticky top-0 z-10">
            <div class="w-10">
                <span class="material-symbols-outlined text-[#0d1b10] dark:text-white cursor-pointer">chevron_left</span>
            </div>
            <h2 class="text-[#0d1b10] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center">Login</h2>
            <div class="w-10"></div>
        </div>
        <!-- Main Content Container -->
        <div class="flex flex-col flex-1 items-center justify-center px-6 py-8">
            <!-- Branding/Icon Section -->
            <div class="mb-6 flex justify-center">
                <div class="w-16 h-16 bg-primary/20 rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-4xl">monitoring</span>
                </div>
            </div>
            <!-- Headline Section -->
            <div class="w-full max-w-[400px]">
                <h1 class="text-[#0d1b10] dark:text-white tracking-light text-[32px] font-bold leading-tight text-center pb-2">Welcome Back</h1>
                <p class="text-[#4b5563] dark:text-gray-400 text-base font-normal leading-normal text-center mb-8">Access your AI income dashboard.</p>
            </div>
            <!-- Login Form Card -->
            <div class="w-full max-w-[400px] bg-white dark:bg-[#1a2e1d] p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800">
    <form method="POST" action="/EvolveAi/auth/login">
        <!-- Email Field -->
        <div class="flex flex-col gap-2 mb-4">
            <label class="flex flex-col w-full">
                <p class="text-[#0d1b10] dark:text-white text-sm font-medium leading-normal pb-2">Email Address</p>
                <input 
                    name="email"
                    autocomplete="email" 
                    class="form-input flex w-full rounded-lg text-[#0d1b10] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-transparent h-12 placeholder:text-gray-400 p-4 text-base font-normal" 
                    placeholder="name@company.com" 
                    type="email" 
                    required
                />
            </label>
        </div>

        <!-- Password Field -->
        <div class="flex flex-col gap-2 mb-2">
            <label class="flex flex-col w-full">
                <div class="flex justify-between items-center pb-2">
                    <p class="text-[#0d1b10] dark:text-white text-sm font-medium leading-normal">Password</p>
                    <a class="text-primary text-xs font-semibold" href="#">Forgot Password?</a>
                </div>
                <div class="flex w-full items-stretch relative">
                    <input 
                        name="password"
                        class="form-input flex w-full rounded-lg text-[#0d1b10] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-transparent h-12 placeholder:text-gray-400 p-4 pr-12 text-base font-normal" 
                        placeholder="••••••••" 
                        type="password" 
                        required
                    />
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer">
                        <span class="material-symbols-outlined text-xl">visibility</span>
                    </div>
                </div>
            </label>
        </div>

        <!-- Login Button -->
        <button 
            type="submit"
            class="w-full bg-primary hover:bg-primary/90 text-[#0d1b10] font-bold py-3.5 rounded-lg mt-6 transition-colors shadow-lg shadow-primary/10"
        >
            Login
        </button>

        <!-- Divider -->
        <div class="flex items-center my-6">
            <div class="flex-1 border-t border-gray-100 dark:border-gray-800"></div>
            <span class="px-3 text-gray-400 text-xs uppercase tracking-widest">Or continue with</span>
            <div class="flex-1 border-t border-gray-100 dark:border-gray-800"></div>
        </div>

        <!-- Social Logins -->
        <div class="grid grid-cols-2 gap-4 mb-4">
            <button class="flex items-center justify-center gap-2 border border-gray-200 dark:border-gray-700 rounded-lg py-2.5 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" type="button">
                <img alt="" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7vw0s8r_cpk-pU4uVFHqygrz5CQnA7z1jZ1KskcbAVumuV3IgNGktvmg8d5LQTuixjkml0EiXKX6wEFlqDVhEBQNUKHzmIW3yaO0n0TzCYHvxRROXvgrg4ECUT2C1RPz0S3VtaJQ0CihYAMtD_x4RYI5MDG3AEuJGJnve2U6e4XiIcQv8UtBFm_4fBLZDQTCnj8nEHBE-93MIjHLPfGjf8lOmyDvFiawihJ7o2GjOOimgeuRaIJOuKNn6Qt2pvg3lXBU9zIEuWzZ4" />
                <span class="text-sm font-medium text-[#0d1b10] dark:text-white">Google</span>
            </button>
            <button class="flex items-center justify-center gap-2 border border-gray-200 dark:border-gray-700 rounded-lg py-2.5 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" type="button">
                <span class="material-symbols-outlined text-xl dark:text-white">ios</span>
                <span class="text-sm font-medium text-[#0d1b10] dark:text-white">Apple</span>
            </button>
        </div>
    </form>
</div>

            <!-- Footer Link -->
            <div class="mt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    Don't have an account?
                    <a class="text-primary font-bold ml-1" href="/">Create an Account</a>
                </p>
            </div>
        </div>
        <!-- Decorative elements for AI vibe -->
        <div class="fixed bottom-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
    </div>
</body>

</html>
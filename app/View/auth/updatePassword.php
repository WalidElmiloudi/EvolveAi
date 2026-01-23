<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Update Password - evolveAi</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style type="text/tailwindcss">
        body {
            font-family: 'Inter', sans-serif;
            min-height: max(884px, 100dvh);
        }
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
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col items-center justify-center p-4">
<div class="w-full max-w-md bg-white dark:bg-[#1a2e1d] rounded-xl shadow-xl overflow-hidden flex flex-col items-center p-8">
<div class="mb-8 flex flex-col items-center">
<div class="w-16 h-16 bg-primary/20 rounded-xl flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-primary text-4xl">neurology</span>
</div>
<h1 class="text-2xl font-bold text-gray-900 dark:text-white">evolveAi</h1>
</div>
<div class="w-full text-center">
<h2 class="text-[#0d1b10] dark:text-gray-100 tracking-tight text-[24px] font-bold leading-tight pb-2">
                Update Your Password
            </h2>
</div>
<div class="w-full text-center">
<p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-relaxed pb-6 pt-1">
                Please enter your new password below to secure your account.
            </p>
</div>
<div class="w-full space-y-4">
<div class="flex flex-col w-full">
<form action="/EvolveAi/auth/resetPassword/<?= $userId ?>/" method="post">
<label class="flex flex-col w-full relative">
<p class="text-[#0d1b10] dark:text-gray-200 text-sm font-medium leading-normal pb-2">New Password</p>
<div class="relative">
<input class="form-input flex w-full rounded-lg text-[#0d1b10] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-[#243a28] h-12 placeholder:text-gray-400 dark:placeholder:text-gray-500 px-4 pr-12 text-base font-normal transition-all" placeholder="Enter new password" type="password" name ="password" required>
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200" type="button">
<span class="material-symbols-outlined text-[22px]">visibility</span>
</button>
</div>
</label>
<button type ="submit" class="w-full bg-primary hover:bg-primary/90 text-[#0d1b10] font-bold py-3.5 rounded-lg transition-colors duration-200 shadow-sm flex items-center justify-center gap-2 mt-2">
<span>Update Password</span>
<span class="material-symbols-outlined text-[20px]">lock_reset</span>
</button>
</form>
</div>
</div>
<div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 w-full text-center">
<a class="inline-flex items-center gap-1 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Back to Security Settings
            </a>
</div>
</div>
<div class="mt-12 opacity-50 hidden md:block">
<div class="w-full @container">
<div class="@[480px]:px-4">
<div class="w-64 h-1 bg-gradient-to-r from-transparent via-primary to-transparent rounded-full mx-auto"></div>
</div>
</div>
</div>

</body></html>
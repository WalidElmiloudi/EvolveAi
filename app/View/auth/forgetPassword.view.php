<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Forgot Password - evolveAi</title>
<!-- Material Symbols for Icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
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
<style>
        body {
            font-family: 'Inter', sans-serif;
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
<!-- iOS Styled Main Container -->
<div class="w-full max-w-md bg-white dark:bg-[#1a2e1d] rounded-xl shadow-xl overflow-hidden flex flex-col items-center p-8">
<!-- Header / Logo Placeholder -->
<div class="mb-8 flex flex-col items-center">
<div class="w-16 h-16 bg-primary/20 rounded-xl flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-primary text-4xl">neurology</span>
</div>
<h1 class="text-2xl font-bold text-gray-900 dark:text-white">evolveAi</h1>
</div>
<!-- Headline Text Component -->
<div class="w-full text-center">
<h2 class="text-[#0d1b10] dark:text-gray-100 tracking-tight text-[24px] font-bold leading-tight pb-2">
                Reset Password
            </h2>
</div>
<!-- Body Text Component -->
<div class="w-full text-center">
<p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-relaxed pb-6 pt-1">
                Enter the email address associated with your account and we'll send you a link to reset your password.
            </p>
</div>
<!-- TextField Component -->
<div class="w-full space-y-4">
<div class="flex flex-col w-full">
<form action="/EvolveAi/auth/sendLink/" method ="post">
<label class="flex flex-col w-full">
<p class="text-[#0d1b10] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Email Address</p>
<input class="form-input flex w-full rounded-lg text-[#0d1b10] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-[#243a28] h-12 placeholder:text-gray-400 dark:placeholder:text-gray-500 px-4 text-base font-normal transition-all" placeholder="e.g., name@email.com" type="email" name = "email" required>
</label>
</div>
<!-- Primary CTA Button -->
<button type ="submit" class="w-full bg-primary hover:bg-primary/90 text-[#0d1b10] font-semibold py-3.5 rounded-lg transition-colors duration-200 shadow-sm flex items-center justify-center gap-2">
<span>Send Reset Link</span>
<span class="material-symbols-outlined text-[20px]">send</span>
</button>
</from>
</div>
<!-- Footer / Back to Login -->
<div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 w-full text-center">
<a class="inline-flex items-center gap-1 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Back to Login
            </a>
</div>
</div>
<!-- Optional: Image Content for context if needed by component list -->
<div class="mt-12 opacity-50 hidden md:block">
<div class="w-full @container">
<div class="@[480px]:px-4">
<div class="w-64 h-1 bg-gradient-to-r from-transparent via-primary to-transparent rounded-full mx-auto" data-alt="Soft green glowing line separator"></div>
</div>
</div>
</div>
<!-- Success Feedback State (Visual only for the UI design) -->
<!-- 
    <div class="fixed bottom-8 px-6 py-3 bg-gray-900 text-white rounded-full flex items-center gap-3 shadow-2xl animate-bounce">
        <span class="material-symbols-outlined text-primary">check_circle</span>
        <p class="text-sm font-medium">Reset link sent successfully!</p>
    </div>
    -->
</body></html>
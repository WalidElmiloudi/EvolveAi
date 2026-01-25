<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="Viewport" />
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
                <span class="text-sm font-medium opacity-60">Community</span>
            </div>
            <div class="flex items-center gap-4">

                <div class="flex items-center gap-3 pl-4 border-l border-black/5 dark:border-white/5">
                    <div class="text-right">
                        <p class="text-sm font-bold"><?= htmlspecialchars($_SESSION['username']) ?></p>
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
                                <form action="/EvolveAi/post/create/" method="post">
                                <textarea
                                    class="w-full bg-background-light dark:bg-white/5 border-none rounded-xl p-4 text-sm focus:ring-1 focus:ring-primary/30 resize-none min-h-[100px]"
                                    name="content" placeholder="What's on your mind?"></textarea>
                                <div class="flex items-center justify-start mt-4">
                                    <div class="flex items-center gap-4">   

                                    </div>
                                    <button
                                        class="bg-primary text-black font-bold px-6 py-2 rounded-lg hover:brightness-95 transition-all text-sm">
                                        Post Update
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <?php
                        if(!empty($posts)):
                           foreach($posts as $post):
                              $isLiked = $this->postModel->isLikedByUser($userId,$post['id']);
                        ?>
                        <div
                            class="bg-white dark:bg-zinc-900 rounded-2xl border border-black/5 dark:border-white/5 shadow-sm">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-3">
                                        <div>
                                            <p class="font-bold text-sm"><?= $post['username'] ?></p>
                                        </div>
                                    </div>
                                    <button class="opacity-40 hover:opacity-100"><span
                                            class="material-symbols-outlined">more_horiz</span></button>
                                </div>
                                <p class="text-sm leading-relaxed mb-4">
                                    <?= $post['content'] ?>
                                </p>
                                <div class="flex items-center gap-6 pt-4 border-t border-black/5 dark:border-white/5">
                                    <form class="like-btn-form">
                                        <input type="hidden" name="user_id" value="<?= $userId ?>">
                                        <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                                      <button type = "submit"
                                        class="flex items-center gap-2 text-xs font-bold opacity-60 hover:opacity-100 group">
                                        <span class="material-symbols-outlined text-lg cursor-pointer text-gray-400 transition like-btn"
                                               style="font-variation-settings: 'FILL' <?= $isLiked ? '1' : '0'  ?>;" data-liked="<?= $isLiked ? 'true' : 'false'  ?>">thumb_up</span><span class="like-count"><?= $post['like_count'] ?></span>
                                      </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                           endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            <!-- RIGHT SIDEBAR -->
<div class="col-span-12 lg:col-span-4 space-y-6">
    <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 border border-black/5 dark:border-white/5 shadow-sm">
        <h3 class="font-bold text-sm mb-4">My Posts</h3>

        <?php if (!empty($userPosts)): ?>
            <?php foreach ($userPosts as $post): ?>
                <div class="border-b border-black/5 dark:border-white/5 pb-4 mb-4 last:border-none">
                    <p class="text-sm mb-3"><?= htmlspecialchars($post['content']) ?></p>

                    <div class="flex gap-3">

                        <!-- DELETE -->
                        <form action="/EvolveAi/post/delete/" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this post?');">
                              <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                            <button type="submit"
                                    class="text-xs font-bold text-red-500 hover:underline">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-sm opacity-60">You haven’t posted anything yet.</p>
        <?php endif; ?>
    </div>
</div>

            </div>
        </main>
    </div>

 <script src="/EvolveAi/public/assets/script.js"></script>
</body>

</html>
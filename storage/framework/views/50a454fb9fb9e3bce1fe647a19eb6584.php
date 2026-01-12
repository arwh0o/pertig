<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard'); ?> - Pertigaan</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <div class="flex h-screen overflow-hidden relative">
        <!-- Mobile Sidebar Overlay -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity" onclick="toggleSidebar()"></div>

        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r border-gray-200 flex-col fixed inset-y-0 left-0 z-50 transform -translate-x-full md:translate-x-0 md:static md:flex transition-transform duration-300 ease-in-out shadow-2xl md:shadow-none">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                <div class="flex items-center gap-3 text-primary">
                    <span class="material-symbols-outlined text-3xl">coffee</span>
                    <h1 class="text-xl font-black tracking-tight">PERTIGAAN</h1>
                </div>
                <!-- Close Button (Mobile Only) -->
                <button class="md:hidden text-gray-500 hover:text-red-500" onclick="toggleSidebar()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <nav class="flex-1 overflow-y-auto p-4 space-y-2">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex items-center gap-3 px-4 py-3 <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-primary/5 text-primary' : 'text-gray-600 hover:bg-gray-50 hover:text-primary'); ?> rounded-xl transition-all font-bold">
                    <span class="material-symbols-outlined">restaurant_menu</span>
                    Menu Manager
                </a>
                <a href="<?php echo e(route('gallery.index')); ?>" class="flex items-center gap-3 px-4 py-3 <?php echo e(request()->routeIs('gallery.index') ? 'bg-primary/5 text-primary' : 'text-gray-600 hover:bg-gray-50 hover:text-primary'); ?> rounded-xl transition-all font-bold">
                    <span class="material-symbols-outlined">photo_library</span>
                    Galeri Foto
                </a>
                <a href="<?php echo e(route('admin.feedbacks.index')); ?>" class="flex items-center gap-3 px-4 py-3 <?php echo e(request()->routeIs('admin.feedbacks.index') ? 'bg-primary/5 text-primary' : 'text-gray-600 hover:bg-gray-50 hover:text-primary'); ?> rounded-xl transition-all font-bold">
                    <span class="material-symbols-outlined">chat_bubble</span>
                    Feedback
                </a>
            </nav>

            <div class="p-4 border-t border-gray-100">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl transition-all font-bold">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 w-full">
            <header class="bg-white border-b border-gray-200 sticky top-0 z-30">
                <div class="px-6 md:px-8 py-5 flex justify-between items-center gap-4">
                    <div class="flex items-center gap-3">
                        <!-- Mobile Toggle -->
                        <button class="md:hidden text-gray-500 hover:text-primary" onclick="toggleSidebar()">
                            <span class="material-symbols-outlined text-3xl">menu</span>
                        </button>
                        <h2 class="text-xl md:text-2xl font-black truncate"><?php echo $__env->yieldContent('header', 'Dashboard'); ?></h2>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <span class="text-sm font-bold text-gray-500 hidden md:inline">Admin</span>
                        <div class="size-10 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold">A</div>
                    </div>
                </div>
            </header>

            <div class="p-4 md:p-8">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            // Toggle Translate
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
<?php /**PATH D:\ARHAN\PERTIG\resources\views/layouts/admin.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Menu Manager'); ?>
<?php $__env->startSection('header', 'Kelola Menu'); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-bold">Daftar Menu</h3>
        <a href="<?php echo e(route('menus.create')); ?>" class="bg-primary text-white px-6 py-3 rounded-xl shadow-lg shadow-primary/20 hover:bg-opacity-90 font-bold flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            Add New Menu
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-sm">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-gray-900"><?php echo e($menu->name); ?></td>
                    <td class="px-6 py-4">
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider"><?php echo e($menu->category); ?></span>
                    </td>
                    <td class="px-6 py-4 font-bold text-primary">Rp <?php echo e(number_format($menu->price, 0, ',', '.')); ?></td>
                    <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?php echo e($menu->description); ?></td>
                    <td class="px-6 py-4 text-right flex justify-end gap-2">
                        <a href="<?php echo e(route('menus.edit', $menu)); ?>" class="text-blue-500 hover:bg-blue-50 p-2 rounded-lg transition-colors">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                        <form action="<?php echo e(route('menus.destroy', $menu)); ?>" method="POST" onsubmit="return confirm('Delete this item?');" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="text-red-400 hover:text-red-600 hover:bg-red-50 p-2 rounded-lg transition-colors">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\ARHAN\PERTIG\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Feedback Customer'); ?>
<?php $__env->startSection('header', 'Suara Customer'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-sm" role="alert">
        <p class="font-bold">Sukses</p>
        <p><?php echo e(session('success')); ?></p>
    </div>
    <?php endif; ?>

    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center">
            <h3 class="text-lg font-black">Kotak Masuk</h3>
            <span class="text-xs font-bold text-gray-500 bg-gray-100 px-3 py-1 rounded-full"><?php echo e($feedbacks->count()); ?> Pesan</span>
        </div>
        
        <?php if($feedbacks->isEmpty()): ?>
            <div class="p-12 text-center text-gray-400">
                <span class="material-symbols-outlined text-5xl mb-3">mark_email_unread</span>
                <p>Belum ada feedback yang masuk.</p>
            </div>
        <?php else: ?>
            <div class="divide-y divide-gray-100">
                <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-6 hover:bg-gray-50 transition-colors group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-4">
                            <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                                <?php echo e(strtoupper(substr($feedback->name, 0, 1))); ?>

                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900"><?php echo e($feedback->name); ?></h4>
                                <p class="text-xs text-gray-500 font-medium"><?php echo e($feedback->email); ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xs text-gray-400 font-bold bg-gray-100 px-2 py-1 rounded">
                                <?php echo e($feedback->created_at->format('d M Y, H:i')); ?>

                            </span>
                            <form action="<?php echo e(route('admin.feedbacks.destroy', $feedback)); ?>" method="POST" onsubmit="return confirm('Hapus pesan ini?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-gray-400 hover:text-red-500 transition-colors p-1" title="Hapus">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="pl-14">
                        <p class="text-gray-700 bg-gray-50 p-4 rounded-xl text-sm leading-relaxed border border-gray-100">
                            <?php echo e($feedback->message); ?>

                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\ARHAN\PERTIG\resources\views/admin/feedbacks/index.blade.php ENDPATH**/ ?>
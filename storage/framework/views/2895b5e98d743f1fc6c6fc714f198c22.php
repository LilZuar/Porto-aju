<?php $__env->startSection('content'); ?>
    <main class="section section-white work-detail-page">
        <div class="work-glide-wrap">
            <img src="/images/<?php echo e($work['glide']); ?>" alt="<?php echo e($work['title']); ?>" class="work-glide">
            <h1><?php echo e($work['title']); ?></h1>
        </div>

        <div class="container detail-grid">
            <div>
                <h2><?php echo e($work['subtitle']); ?></h2>
                <p><?php echo e($work['description']); ?></p>
            </div>

            <div class="detail-image-wrap">
                <img src="/images/<?php echo e($work['image']); ?>" alt="<?php echo e($work['title']); ?>" class="detail-image">
            </div>
        </div>

        <section class="container content-block detail-block">
            <h2>My Role</h2>
            <p><?php echo e($work['jobDesc']); ?></p>
        </section>

        <?php if(!empty($work['previews'])): ?>
            <section class="container detail-block preview-section">
                <h2>App Preview</h2>
                <p class="preview-subtitle">Screenshots from the app</p>
                <div class="preview-grid">
                    <?php $__currentLoopData = $work['previews']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="preview-card">
                            <img src="/images/<?php echo e($preview); ?>" alt="<?php echo e($work['title']); ?> preview" class="preview-img">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
        <?php endif; ?>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/lazuardhi/Documents/New project/resources/views/portfolio/work-show.blade.php ENDPATH**/ ?>
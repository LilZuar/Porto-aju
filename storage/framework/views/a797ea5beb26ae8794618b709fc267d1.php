<?php $__env->startSection('content'); ?>
    <section class="section section-muted">
        <div class="container">
            <div class="work-page-header">
                <h1>My <span>Work</span></h1>
            </div>

            <div class="work-grid">
                <?php $__currentLoopData = $workItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('portfolio.work.show', $item['slug'])); ?>" class="work-card">
                        <div class="work-cover-wrap">
                            <img src="/images/<?php echo e($item['image']); ?>" alt="<?php echo e($item['title']); ?>" class="work-cover work-contain">
                        </div>
                        <div class="work-copy">
                            <h2><?php echo e($item['title']); ?></h2>
                            <p><?php echo e($item['subtitle']); ?></p>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <?php echo $__env->make('portfolio.partials.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/lazuardhi/Documents/New project/resources/views/portfolio/work.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <main>
        
        <section class="hero-section">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <div class="hero-badge">Available for freelance &amp; full-time</div>
                    <p class="hero-role">Software Engineer · Mobile Programmer</p>
                    <h1>Lazuardhi<br>Imani Ahfar</h1>
                    <p class="hero-text">Welcome to Azuar's Portfolio — building impactful digital experiences for mobile and web.</p>
                    <a href="<?php echo e(route('portfolio.about')); ?>" class="button button-dark">Explore More &rarr;</a>
                </div>

                <div class="hero-image-wrap">
                    <img src="/images/aju2.png" alt="Lazuardhi Imani Ahfar" class="hero-image">
                </div>
            </div>
        </section>

        
        <section class="section section-white">
            <div class="container">
                <div class="section-intro center">
                    <h2>Services</h2>
                    <p>I help businesses and individuals build impactful digital experiences.</p>
                </div>

                <div class="services-grid">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="service-card">
                            <img src="/images/<?php echo e($service['icon']); ?>" alt="<?php echo e($service['title']); ?> icon" class="service-icon">
                            <h3><?php echo e($service['title']); ?></h3>
                            <p><?php echo e($service['description']); ?></p>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        
        <section class="section section-muted" id="work">
            <div class="container">
                <div class="section-intro center">
                    <h2>My Latest Work</h2>
                    <p>A selection of projects I'm proud of.</p>
                </div>

                <div class="work-grid">
                    <?php $__currentLoopData = $featuredWorkItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('portfolio.work.show', $work['slug'])); ?>" class="work-card">
                            <div class="work-cover-wrap">
                                <img src="/images/<?php echo e($work['image']); ?>" alt="<?php echo e($work['title']); ?>" class="work-cover work-contain">
                            </div>
                            <div class="work-copy">
                                <h3><?php echo e($work['title']); ?></h3>
                                <p><?php echo e($work['subtitle']); ?></p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        <?php echo $__env->make('portfolio.partials.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/lazuardhi/Documents/New project/resources/views/portfolio/index.blade.php ENDPATH**/ ?>
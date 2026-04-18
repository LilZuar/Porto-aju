<?php $__env->startSection('content'); ?>
    <main>
        <section class="about-page">
            <div class="container about-hero">
                <div class="about-hero-copy">
                    <p class="about-kicker">A little more about me</p>
                    <h1><?php echo e($profile['name']); ?></h1>
                    <p class="about-headline"><?php echo e($profile['headline']); ?></p>
                    <p class="about-summary"><?php echo e($profile['summary']); ?></p>

                    <div class="about-actions">
                        <a href="/resume/CV.pdf" download="Lazuardhi_Imani_Ahfar_Resume.pdf" class="button button-dark">Download CV</a>
                        <a href="<?php echo e($profile['linkedin']); ?>" target="_blank" rel="noreferrer" class="button button-ghost">LinkedIn</a>
                    </div>
                </div>

                <aside class="about-card">
                    <h2>Quick Info</h2>
                    <ul class="about-facts">
                        <li><span>Base</span><strong><?php echo e($profile['location']); ?></strong></li>
                        <li><span>Email</span><strong><?php echo e($profile['email']); ?></strong></li>
                        <li><span>Phone</span><strong><?php echo e($profile['phone']); ?></strong></li>
                        <li><span>Portfolio</span><strong><a href="<?php echo e($profile['portfolio']); ?>" target="_blank" rel="noreferrer"><?php echo e($profile['portfolio']); ?></a></strong></li>
                    </ul>
                </aside>
            </div>

            <div class="container about-highlights">
                <?php $__currentLoopData = $highlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $highlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="highlight-pill"><?php echo e($highlight); ?></article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="container about-grid">
                <section class="about-panel about-story">
                    <div class="panel-heading">
                        <p>My vibe</p>
                        <h2>Casual, curious, and serious about shipping good work.</h2>
                    </div>
                    <p>
                        I like building products that solve clear problems, especially on mobile. The part I enjoy most is when technical decisions actually make the experience feel lighter for users and smoother for the team.
                    </p>
                    <p>
                        Over time, I’ve worked across iOS apps, internal tools, client projects, and product experiments. That mix made me comfortable not only writing code, but also discussing requirements, collaborating with designers, and helping projects move forward when things are still messy.
                    </p>
                </section>

                <section class="about-panel">
                    <div class="panel-heading">
                        <p>Skills</p>
                        <h2>Tools and strengths I use the most.</h2>
                    </div>

                    <div class="skill-groups">
                        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="skill-group">
                                <h3><?php echo e($group); ?></h3>
                                <div class="skill-chips">
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span><?php echo e($item); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </section>
            </div>

            <div class="container timeline-section">
                <div class="panel-heading">
                    <p>Experience</p>
                    <h2>What I’ve worked on so far.</h2>
                </div>

                <div class="timeline-list">
                    <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="timeline-card">
                            <div class="timeline-top">
                                <div>
                                    <h3><?php echo e($experience['role']); ?></h3>
                                    <p class="timeline-company"><?php echo e($experience['company']); ?> · <?php echo e($experience['location']); ?></p>
                                </div>
                                <span class="timeline-period"><?php echo e($experience['period']); ?></span>
                            </div>

                            <ul class="timeline-points">
                                <?php $__currentLoopData = $experience['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($point); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="container about-bottom-grid">
                <section class="about-panel">
                    <div class="panel-heading">
                        <p>Education</p>
                        <h2>Foundation that shaped my approach.</h2>
                    </div>

                    <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="mini-card">
                            <h3><?php echo e($item['degree']); ?></h3>
                            <p class="mini-meta"><?php echo e($item['school']); ?> · <?php echo e($item['period']); ?></p>
                            <p class="mini-gpa"><?php echo e($item['meta']); ?></p>
                            <ul class="timeline-points compact">
                                <?php $__currentLoopData = $item['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($point); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>

                <section class="about-panel">
                    <div class="panel-heading">
                        <p>Extra</p>
                        <h2>Outside of work and class.</h2>
                    </div>

                    <?php $__currentLoopData = $organization; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="mini-card">
                            <h3><?php echo e($item['name']); ?></h3>
                            <p class="mini-meta"><?php echo e($item['location']); ?> · <?php echo e($item['period']); ?></p>
                            <p>
                                I was also active in campus organization work, which helped sharpen communication, coordination, and responsibility beyond purely technical tasks.
                            </p>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
            </div>
        </section>

        <?php echo $__env->make('portfolio.partials.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/lazuardhi/Documents/New project/resources/views/portfolio/about.blade.php ENDPATH**/ ?>
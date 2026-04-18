<section id="contact" class="section section-white contact-section">
    <div class="container contact-shell">
        <div class="contact-copy">
            <h2>Let's work<br>together</h2>
            <p>Have a project in mind or want to discuss collaboration? I'd love to hear from you.</p>
        </div>

        <form action="<?php echo e(route('portfolio.contact')); ?>" method="POST" class="contact-form">
            <?php echo csrf_field(); ?>

            <?php if(session('status')): ?>
                <p class="form-status"><?php echo e(session('status')); ?></p>
            <?php endif; ?>

            <label class="sr-only" for="name">Name</label>
            <input id="name" name="name" type="text" value="<?php echo e(old('name')); ?>" placeholder="Your Name" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label class="sr-only" for="email">Email</label>
            <input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" placeholder="your@email.com" required>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label class="sr-only" for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell me about your project..." required><?php echo e(old('message')); ?></textarea>
            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit" class="button button-dark button-wide">Send Message &rarr;</button>
        </form>
    </div>
</section>
<?php /**PATH /Users/lazuardhi/Documents/New project/resources/views/portfolio/partials/contact.blade.php ENDPATH**/ ?>
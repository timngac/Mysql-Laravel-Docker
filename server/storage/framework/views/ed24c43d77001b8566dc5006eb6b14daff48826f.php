<form action="<?php echo e(route('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="email" name="email" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Login</button>
</form>

<?php if(session('error')): ?>
    <?php echo e(session('error')); ?>

<?php endif; ?>

<?php if(session('success')): ?>
    <?php echo e(session('success')); ?>

<?php endif; ?>
<?php /**PATH /srv/resources/views/welcome.blade.php ENDPATH**/ ?>
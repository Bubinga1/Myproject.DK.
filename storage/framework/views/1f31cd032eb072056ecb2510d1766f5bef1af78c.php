

<?php $__env->startSection('title'); ?><?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>:: Send mail <?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <form method="post" action="/send">

            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="text">Your message</label>
                <textarea class="form-control" id="text" rows="5" name="text"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\myproject\resources\views/send.blade.php ENDPATH**/ ?>
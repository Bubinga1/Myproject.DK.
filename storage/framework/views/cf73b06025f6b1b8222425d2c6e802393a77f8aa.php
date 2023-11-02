

<?php $__env->startSection('title'); ?><?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>:: <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">



        <form class="mt-5" method="post" action="<?php echo e(route('posts.store')); ?>">

            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo e(old('title')); ?>">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content" placeholder="Content"><?php echo e(old('content')); ?></textarea>
            </div>

            <div class="form-group">
                <label for="rubric_id">Rubric</label>
                <select class="form-control" id="rubric_id" name="rubric_id">
                    <option>Select rubric</option>
                    <?php $__currentLoopData = $rubrics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($k); ?>"
                        <?php if(old('rubric_id') == $k): ?> selected <?php endif; ?>
                        ><?php echo e($v); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\myproject\resources\views/create.blade.php ENDPATH**/ ?>
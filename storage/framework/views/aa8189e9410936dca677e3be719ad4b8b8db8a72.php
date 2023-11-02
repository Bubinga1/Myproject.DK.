<!DOCTYPE html>
<html>
<head>
	<title>How to create SEO friendly sluggable URL Laravel 9 Example - LaravelTuts.com</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>How to create SEO friendly sluggable URL Laravel 9 Example - LaravelTuts.com</h2><br/>
        <form method="POST" action="<?php echo e(route('item-create')); ?>" autocomplete="off">
            <?php if(count($errors)): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <br/>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" value="<?php echo e(old('title')); ?>">
                        <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <button class="btn btn-success">Create New Item</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="panel panel-primary">
        <div class="panel-heading">Item management</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>name</th>
                    <th>URL</th>
                    <th>slug</th>
                    <th>Updated Date</th>
                </thead>
                <tbody>
                    <?php if($items->count()): ?>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$key); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><a href=""><?php echo e(URL::to('/') . '/item/' . $item->slug); ?></a></td>
                                <td><?php echo e($item->slug); ?></td>
                                <td><?php echo e($item->updated_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">There are no data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html><?php /**PATH D:\OSPanel\domains\myproject\resources\views/items.blade.php ENDPATH**/ ?>
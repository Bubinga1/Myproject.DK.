<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Список постов</h1>

<ul>
    <li>
        <a href="<?php echo e(route('posts.show', ['slug' => 1])); ?>">Post 1</a> |
        <a href="<?php echo e(route('posts.edit', ['slug' => 1])); ?>">Edit</a> |
        <form action="<?php echo e(route('posts.destroy', ['slug' => 1])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    </li>

    <li>
        <a href="<?php echo e(route('posts.show', ['slug' => 2])); ?>">Post 2</a> |
        <a href="<?php echo e(route('posts.edit', ['slug' => 2])); ?>">Edit</a> |
        <form action="<?php echo e(route('posts.destroy', ['slug' => 2])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    </li>

    <li>
        <a href="<?php echo e(route('posts.show', ['slug' => 3])); ?>">Post 3</a> |
        <a href="<?php echo e(route('posts.edit', ['slug' => 3])); ?>">Edit</a> |
        <form action="<?php echo e(route('posts.destroy', ['slug' => 3])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    </li>
</ul>

</body>
</html><?php /**PATH D:\OSPanel\domains\myproject\resources\views/posts/index.blade.php ENDPATH**/ ?>
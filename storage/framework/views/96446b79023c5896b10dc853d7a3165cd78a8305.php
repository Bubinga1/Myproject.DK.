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

<form action="<?php echo e(route('posts.update', ['slug' => $id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>

</body>
</html>
<?php /**PATH D:\OSPanel\domains\myproject\resources\views/posts/edit.blade.php ENDPATH**/ ?>
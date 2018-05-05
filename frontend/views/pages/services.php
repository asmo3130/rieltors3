<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 13:10
 */

$servicesstaty = $model::ServicesStaty();
$ser = $model::Services();

 // debug($servicesstaty);
echo $ser['0'];
?>
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
<ul>
    <?php foreach ($servicesstaty as $a): ?>
        <?php // debug($a) ?>
        <?php if ($a['id'] == 9): ?>
            <li><a href="s1"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
        <?php if ($a['id'] == 10): ?>
            <li><a href="s2"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
        <?php if ($a['id'] == 11): ?>
            <li><a href="s3"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
        <?php if ($a['id'] == 12): ?>
            <li><a href="s4"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
        <?php if ($a['id'] == 13): ?>
            <li><a href="s5"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
        <?php if ($a['id'] == 14): ?>
            <li><a href="s6"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
        <?php if ($a['id'] == 2): ?>
            <li><a href="s7"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
</body>
</html>

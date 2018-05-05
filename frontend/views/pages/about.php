<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 13:10
 */

use yii\helpers\Html;

$aboutstay = $model::AboutStaty();
$ab = $model::About();

echo $ab['0']; ?> <br>

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
        <?php foreach ($aboutstay as $a): ?>
        <?php // debug($a) ?>
             <?php if ($a['id'] == 1): ?>
            <li><a href="t1"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
            <?php if ($a['id'] == 3): ?>
                <li><a href="t2"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
            <?php if ($a['id'] == 4): ?>
                <li><a href="t3"><?php echo $a['title']?></a></li>
                <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
            <?php if ($a['id'] == 5): ?>
                <li><a href="t4"><?php echo $a['title']?></a></li>
                <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
            <?php if ($a['id'] == 6): ?>
                <li><a href="t5"><?php echo $a['title']?></a></li>
                <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
            <?php if ($a['id'] == 7): ?>
                <li><a href="t6"><?php echo $a['title']?></a></li>
                <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
            <?php if ($a['id'] == 8): ?>
                <li><a href="t7"><?php echo $a['title']?></a></li>
                <div><?php echo $a['content'] ?></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>

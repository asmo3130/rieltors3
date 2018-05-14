<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 15:16
 */

$article = $model::Article();

$articles = $model::ArticleStay();

echo $article['0'];

 //debug($articles);
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
    <?php foreach ($articles as $a): ?>
        <?php // debug($a) ?>
        <?php if ($a['id'] == 15): ?>
            <li><a href="a1"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $a['img']?>"></div>
        <?php endif; ?>
        <?php if ($a['id'] == 16): ?>
            <li><a href="a2"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $t['img']?>"></div>
        <?php endif; ?>
        <?php if ($a['id'] == 17): ?>
            <li><a href="a3"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $t['img']?>"></div>
        <?php endif; ?>
        <?php if ($a['id'] == 18): ?>
            <li><a href="a4"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $t['img']?>"></div>
        <?php endif; ?>
        <?php if ($a['id'] == 19): ?>
            <li><a href="a5"><?php echo $a['title']?></a></li>
            <div><?php echo $a['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $t['img']?>"></div>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
</body>
</html>

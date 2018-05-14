<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 16:38
 */

$a4 = $model->ArticleStay()?>

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
<?php foreach ($a4 as $t): ?>
    <?php if ($t['id'] == 18): ?>
        <h1><?php echo $t['title']?></h1>
        <div><?php echo $t['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $t['img']?>"></div>
    <?php endif; ?>
<?php endforeach; ?>
</body>
</html>

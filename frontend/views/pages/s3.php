<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 14:24
 */
$s3 = $model->ServicesStaty();

// debug($s1);
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
<?php foreach ($s3 as $t): ?>
    <?php if ($t['id'] == 11): ?>
        <h1><?php echo $t['title']?></h1>
        <div><?php echo $t['content'] ?></div>
    <?php endif; ?>
<?php endforeach; ?>
</body>
</html>
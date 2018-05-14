<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 03.05.2018
 * Time: 13:11
 */

$car = $model::Careers();
$careersstay = $model::CareersStay();

echo $car['0'];
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
<?php foreach ($careersstay as $n): ?>
    <h1><?php echo $n['title'] ?></h1>
    <h3><?php echo $n['name'] ?></h3>
    <div><?php echo $n['content'] ?><img src="http://crystalittest.com.ua/backend/web/<?php echo $t['img']?>"></div>
<?php endforeach; ?>
</body>
</html>

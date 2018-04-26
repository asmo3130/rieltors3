<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use app\models\Ads;
use app\models\Users;

$ads = Ads::find()->where(['confirmed' => 0])->all();
$adscon = Ads::find()->where(['confirmed' => 1])->all();

foreach ($ads as $ad){
    $orders[] = $ad['id'];
    $order = count($orders);
}
foreach ($adscon as $adc){
    $ordersc[] = $adc['id'];
    $ordercon = count($ordersc);
}

$users = Users::getUsers();

foreach ($users as $user){
    $us[] = $user['id'];
    $use = count($us);
}
?>
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3><?=$order?></h3>

            <p>Не подтвержденных обьявлений</p>
        </div>
        <div class="icon">
            <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="ads/nonregistered" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
        <div class="inner">
            <h3><?=$use?></h3>

            <p>Пользователей</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="users/index" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3><?=$ordercon?></h3>

            <p>Подтвержденных обьявлений</p>
        </div>
        <div class="icon">
            <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="ads/registered" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
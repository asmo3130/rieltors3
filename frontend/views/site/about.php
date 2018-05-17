<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?

    $hood_id = 2;

    $rows = (new \yii\db\Query())
        ->select(['name'])
        ->from('small_area')
        ->all();
    echo "<pre>";
    var_dump( $rows); 
    echo "</pre>";

    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="">
        <input type="text" name="">
        <label>
            <optoin type="text" value="1">1</optoin>
            <optoin type="text" value="2">2</optoin>
            <optoin type="text" value="3">3</optoin>
        </label>
        <input type=file name=uploadfile>
        <input type=submit value=Загрузить></form>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 02.04.2018
 * Time: 16:25
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

        <p>Вы ввели имя:</p><?=$name?>
        <p>Вы ввели фамилия:</p><?=$last_name?>
        <p>Вы ввели телефон:</p><?=$phone?>
        <p>Вы ввели e-mail:</p><?=$email?>


        <?php $f = ActiveForm::begin(); ?>

        <?= $f->field($form, 'name')?>

        <?= $f->field($form, 'last_name')?>

        <?= $f->field($form, 'phone')?>

        <?= $f->field($form, 'email')?>

        <?= Html::submitButton('Отправить') ?>

        <?php ActiveForm::end(); ?>
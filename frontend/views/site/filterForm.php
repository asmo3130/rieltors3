<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 02.04.2018
 * Time: 16:25
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;

?>

<div class="row">
    <div class="col-lg-5">
        <?php $f = ActiveForm::begin(); ?>

        <?= $f->field($model, 'name')?>

        <?= $f->field($model, 'last_name')?>

        <?= $f->field($model, 'phone')?>

        <?= $f->field($model, 'email')?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'Отправить']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
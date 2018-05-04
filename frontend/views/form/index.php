<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 23.04.2018
 * Time: 16:00
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

//debug($model);
?>

<h1>Форма Аренды</h1>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <?php echo Yii::$app->session->getFlash('success'); ?>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <?php echo Yii::$app->session->getFlash('error'); ?>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'test-form']]) ?>
    <?php echo $form->field($model, 'name')?>
    <?php echo $form->field($model, 'email')?>
    <?php echo $form->field($model, 'text')?>
    <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>



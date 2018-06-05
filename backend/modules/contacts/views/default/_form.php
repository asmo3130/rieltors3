<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\Update;

/* @var $this yii\web\View */
/* @var $model backend\modules\articles\models\Articles */
/* @var $form yii\widgets\ActiveForm */




//$titles = $model->getPageNames();
//$authors = Contacts::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
//$items = ArrayHelper::map($authors,'id','title');
//$params = [
 //   'prompt' => 'Укажите автора записи'
//];
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

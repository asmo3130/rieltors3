<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\Update;

/* @var $this yii\web\View */
/* @var $model backend\modules\articles\models\Articles */
/* @var $form yii\widgets\ActiveForm */


echo \vova07\imperavi\Widget::widget([
    'selector' => '#articles-content',
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'imageUpload' => Url::to(['/default/image-upload']),
        'plugins' => [
            'imagemanager',
        ],
    ],
]);

$titles = $model->getPageNames();
$authors = Update::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
$items = ArrayHelper::map($authors,'id','title');
$params = [
    'prompt' => 'Укажите автора записи'
];
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'page_id')->input('hidden', ['value' => 1]) ?>

    <?= $form->field($model, 'img')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 23.04.2018
 * Time: 15:25
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Select2;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>фильтр</title>
</head>
<body>
<?php $sityS = $model::searchSity(); ?>
<?php $stritS = $model::searchStrit(); ?>
<?php $filter = $model::searchFilter(); ?>
<?php $action =  Url::to("result"); ?>
<?php $oblast = $model::SearchOblast(); ?>

<?php //($model::searchResult()); ?>


<div id="tabs">
    <div class="tab whiteborder">Квартира</div>

    <div class="tabContent">
        <?php $form = ActiveForm::begin(['id' => 'test-form', 'action' => $action, 'method' => 'POST'])?>

        <?php
        $params = [
            'prompt' => 'Выберите месторасположене',
        ];
        echo $form->field($model, 'lviv_sections')->dropDownList($model->FunStr($filter[0]['lviv_sections']),$params)->label('Выберите месторасположене'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите стоимость от',
        ];
        echo $form->field($model, 'price_from')->dropDownList($model->FunStr($filter[0]['price_from']),$params)->label('Выберите стоимость от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите стоимость до',
        ];
        echo $form->field($model, 'price_to')->dropDownList($model->FunStr($filter[0]['price_to']),$params)->label('Выберите стоимость до'); ?>

        <?php
        $params = [
            'prompt' => 'Колиство комнат',
        ];
        echo $form->field($model, 'rooms')->dropDownList($model->FunStr($filter[0]['rooms']),$params)->label('выберите количество комнат'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь от',
        ];
        echo $form->field($model, 'area_from')->dropDownList($model->FunStr($filter[0]['area_from']),$params)->label('Площадь от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь до',
        ];
        echo $form->field($model, 'area_to')->dropDownList($model->FunStr($filter[0]['area_to']),$params)->label('Площадь до'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь кухни от',
        ];
        echo $form->field($model, 'kitchen_area_from')->dropDownList($model->FunStr($filter[0]['kitchen_area_from']),$params)->label('Площадь кухни от'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите площадь кухни до',
        ];
        echo $form->field($model, 'kitchen_area_to')->dropDownList($model->FunStr($filter[0]['kitchen_area_to']),$params)->label('Площадь кухни до'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип дома',
        ];
        echo $form->field($model, 'house_type')->dropDownList($model->FunStr($filter[0]['house_type']),$params)->label('Тип дома'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите тип отопления',
        ];
        echo $form->field($model, 'heating')->dropDownList($model->FunStr($filter[0]['heating']),$params)->label('Выберите тип отопления'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите год постройки',
        ];
        echo $form->field($model, 'year')->dropDownList($model->FunStr($filter[0]['year']),$params)->label('Выберите год постройки'); ?>

        <?php
        $params = [
            'prompt' => 'Выберите этаж',
        ];
        echo $form->field($model, 'floars')->dropDownList($model->FunStr($filter[0]['floars']),$params)->label('Выберите этаж'); ?>



        <?php echo Html::submitButton('Найти', ['class' => 'btn btn-success']) ?>
        <?php ActiveForm::end() ?>
    </div>

</div>


</body>
</html>

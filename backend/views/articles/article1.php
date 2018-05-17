<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 16.05.18
 * Time: 15:11
 */

echo "article1";
$art = $model->renderArt('15');


use yii\helpers\Url;
use vova07\imperavi\Widget;

echo \vova07\imperavi\Widget::widget([
    'selector' => '#my-textarea',
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'imageUpload' => Url::to(['/default/image-upload']),
        'plugins' => [
            'imagemanager',
        ],
    ],
]);
?>

<form action="<?=Url::to(['articles/updates'])?>" method="post">
    <input type="hidden" name="id" value="<?=$art[0]["id"]?>">
    <textarea name="title" id="" cols="30" rows="10"><?=$art[0]["title"]?></textarea>
    <textarea id="my-textarea" name="content"><?=$art[0]["content"]?></textarea>
    <button class="btn btn-default btn-lg active confirm_articles" role="button">Подтвердить</button>
</form>
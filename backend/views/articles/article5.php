<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 16.05.18
 * Time: 15:11
 */

echo "article1";
$art = $model->renderArt('19');


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

<form action="" method="post">
    <textarea id="my-textarea" name="title"><?=$art[0]["content"]?></textarea>
    <a href="<?=$item['url']?>" class="btn btn-default btn-lg active confirm_articles" data-button="<?=$url;?>" role="button">Подтвердить</a>
</form>
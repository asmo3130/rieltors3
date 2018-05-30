<?php
use Yii;
use yii\helpers\Url; 
use vova07\imperavi\Widget;
echo "<pre>";
var_dump($model->actions());
echo "</pre>";

echo vova07\imperavi\Widget::widget([ 
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
<form action="updates" method="post"> <input type="hidden" name="id" value="<?//=["id"]?>">
    <textarea name="title" id="" cols="30" rows="3"><?//=["title"]?></textarea>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <textarea id="my-textarea" name="content"><?//=["content"]?></textarea>
    <button class="btn btn-default btn-lg active confirm_articles" role="button">Подтвердить</button>
</form>
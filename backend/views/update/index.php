<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 04.05.2018
 * Time: 11:29
 */
use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$pages = $model->pages();


?>
<?php foreach ($pages as $page) :?>
<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                                <h3 class="panel-title"><?=$page['title']?></h3>
                            </div>
            <div class="panel-body">
                <div class="col-xs-6 col-md-3">
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <p>
                            <?=$page["content"]?>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".id_<?=$page['id'];?>">Редактировать</button>
                    </div>
                </div>


            </div>

        </div>

    </div>
    <div class="modal fade bs-example-modal-lg id_<?=$page['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-body">

                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <form action="update/deletes" method="post">
                                <p>
                                    <input type="text" name="title" value="<?=$page["title"]?>">
                                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                </p>
                                <p>
                                    <input type="text" name="content" value="<?=$page["content"]?>">
                                    <input type="hidden" name="id" value="<?=$page['id'];?>">
                                </p>
                                <button class="btn btn-default btn-lg active confirm_page" data-button="<?=$url;?>" role="button">Подтвердить</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <?
                            $url = $page['id'];
                            ?>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
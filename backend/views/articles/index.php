<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 10:33
 */

//echo "articles";

$articles = $model->articles();

//var_dump($articles);
?>


<? foreach ($articles as $item) :?>
<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=$item['title']?></h3>
            </div>
            <div class="panel-body">
                <div class="col-xs-6 col-md-3">
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <p>
                            <?=$item["content"]?>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".id_<?=$item['id'];?>">Редактировать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg id_<?=$item['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-body">

                    <div class="col-xs-12 col-md-12">
                        <div class="caption">
                            <form action="articles/updates" method="post">
                                <p>
<!--                                    <input type="text" name="title" value="">-->
                                    <textarea id="title" name="title"><?=$item["title"]?></textarea>
                                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                    <input type="file" name="myfile">
                                </p>
                                <p>
                                    <input type="text" name="content" value="<?=$item["content"]?>">
                                    <textarea id="content" name="content"><?=$item["content"]?></textarea>
                                    <input type="hidden" name="id" value="<?=$item['id'];?>">
                                </p>
                                <?
                                $url = $item['id'];
                                ?>
                                <button class="btn btn-default btn-lg active confirm_articles" data-button="<?=$url;?>" role="button">Подтвердить</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="caption">


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
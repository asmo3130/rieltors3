<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 12:00
 */

$rieltors = $model->Rieltor();

$area = $model->getArea();
?>

<button class="btn btn-primary" data-toggle="modal" data-target=".id_add">Добавить риэлтора</button>
<div class="modal fade bs-example-modal-lg id_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel-body">

                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <form action="rieltor/add" method="post" enctype="multipart/form-data">
                            <select name="area" id="area">
                                <?php foreach ($area as $item) {
                                    var_dump($item);
                                    ?>
                                    <option value="<?=$item['id']?>"><?=$item['name_area']?></option>

                                    <?

                                    }
                                    ?>

                            </select>
                            <p>
                                <input type="text" name="name" value="" placeholder="name">
                                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                <input type="phone" name="phone" value="" placeholder="phone">
                                <input type="email" name="email" value="" placeholder="email">
                            </p>
                            <button class="btn btn-default btn-lg active confirm_articles" role="button">Подтвердить</button>
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




<?php foreach ($rieltors as $item) { ?>
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=$item['name']?></h3>
            </div>
            <div class="panel-body">
                <div class="col-xs-6 col-md-3">
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <p>
                            <?=$item["email"]?>
                        </p>
                        <p>
                            <?=$item["phone"]?>
                        </p>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".id_<?=$item['id'];?>">Редактировать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade bs-example-modal-lg id_<?=$item['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel-body">

                <div class="col-xs-6 col-md-3">
                    <div class="caption">
                        <form method="post">
                            <p>
                                <input type="text" name="name" value="<?=$item['name']?>" placeholder="name">
                                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                <input type="phone" name="phone" value="<?=$item['phone']?>" placeholder="phone">
                                <input type="email" name="email" value="<?=$item['email']?>" placeholder="email">
                            </p>
                            <button class="btn btn-default btn-lg active confirm_rielr_update" role="button">Подтвердить</button>
                            <button class="btn btn-default btn-lg active confirm_rielr_delete" data-button="<?=$item['id']?>" role="button">Удалить</button>
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

<?} ?>
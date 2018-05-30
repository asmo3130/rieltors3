<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 22.05.18
 * Time: 16:20
 */

use yii\helpers\Url;
use vova07\imperavi\Widget;
$actions = $model->actions();

?>

<button class="btn btn-primary" data-toggle="modal" data-target=".edit_modal">Добавить</button>
<?

foreach($actions as $item){
// var_dump($item);
?>



<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-12 col-md-12"> <div class="col-xs-6 col-md-3">
                        <div class="caption">
                            <div class="caption">
                                <div>
                                    <?
                                    echo $item['title'];
                                    ?>
                                    <form action="news/edit" method="post">
                                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                        <input type="hidden"  name="url" value="<?=$item['url']?>">
                                        <button class="action-red" type="submit">
                                            Редактировать
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <?
        }
        ?>
        <div class="modal fade bs-example-modal-lg edit_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="panel-body">
                        <form action="news/add" method="post">
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <label for="name">Name</label>
                            <input type="text" class="name" name="name">
                            <button class="btn btn-primary" type="submit">
                                Добавить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 05.05.18
 * Time: 10:28
 */

namespace backend\controllers;


use app\models\Articles;
use yii\web\Controller;

class ArticlesController extends Controller
{
    public function actionIndex(){
        $model = new Articles();

        return $this->render('index', ['model' => $model]);
    }

    public function actionUpdates(){
        $model = new Articles();
        $model->updates($_POST['id'], $_POST['title'], $_POST['content']);


    //    mkdir('upload', 777);
        $path = 'upload/'; // директория для загрузки
        $ext = array_pop(explode('.',$_FILES['myfile']['name'])); // расширение
        $new_name = time().'.'.$ext; // новое имя с расширением
        $full_path = $path.$new_name; // полный путь с новым именем и расширением

        if($_FILES['myfile']['error'] == 0){
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], $full_path)){
                $model->upload($full_path, $_POST['id']);
                // Если файл успешно загружен, то вносим в БД (надеюсь, что вы знаете как)
                // Можно сохранить $full_path (полный путь) или просто имя файла - $new_name
            }else{
                echo "error";
            }
        }

        return $this->render('index', ['model' => $model]);
    }
}
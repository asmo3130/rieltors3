<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 22.05.18
 * Time: 16:20
 */
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;
use yii\helpers\Url;

class News extends ActiveRecord
{
    public static function  tableName(){
        return 'articles';
    }

    public function actions(){
        $tables = (new \yii\db\Query())
            ->select('*')
            ->from('articles')
            ->where(['page_id' => '3'])
            ->all();

        return $tables;
    }

    public function edit($name){

        $tables = (new \yii\db\Query())
            ->select('*')
            ->from('articles')
            ->where(['url' => $name])
            ->all();

        return $tables;
    }


    public function add($name, $uri){

        #content start

        /**/

        $content = "<?php \n";
        $content .= "use yii\helpers\Url; \n";
        $content .= "use vova07\imperavi\Widget; \n";
        $content .= "echo vova07\imperavi\Widget::widget([ \n";
        $content .= "'selector' => '#my-textarea', \n";
        $content .= "'settings' => [ \n";
        $content .= " 'lang' => 'ru', \n";
        $content .= "'minHeight' => 200, \n";
        $content .= "'imageUpload' => Url::to(['/default/image-upload']), \n";
        $content .= "'plugins' => [ \n";
        $content .= " 'imagemanager', \n";
        $content .= " ], \n";
        $content .= " ], \n" ;
        $content .= "]); \n";
        $content .= "?> \n";
        $content .= "<form action=\"updates\" method=\"post\"> ";
        $content .= "<input type=\"hidden\" name=\"id\" value=\"<?//=$art[0][\"id\"]?>\">";
        $content .= "<textarea name=\"title\" id=\"\" cols=\"30\" rows=\"3\"><?//=$art[0][\"title\"]?></textarea>";
        $content .= " <input type=\"hidden\" name=\"_csrf\" value=\"<?//=Yii::$app->request->getCsrfToken()?>\" />";
        $content .= " <textarea id=\"my-textarea\" name=\"content\"><?//=$art[0][\"content\"]?></textarea>";
        $content .= " <button class=\"btn btn-default btn-lg active\" role=\"button\">Подтвердить</button>";
        $content .= "</form>";

        //$arg = "test ".$uri;

        $file = "../views/news/".$uri.".php";

        if (!file_exists($file)) {
            $fp = fopen($file, "w");
            fwrite($fp, $content);
            fclose($fp);
        }

        $action = new Action();
        $action->title = $name;
        $action->url = $uri;
        $action->page_id = 3;
        $action->insert();

        return true;
    }


}
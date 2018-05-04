<?php
/**
 * Created by PhpStorm.
 * User: Денис(PHP)
 * Date: 24.04.2018
 * Time: 10:51
 */
//$this->title = 'show';
?>

<?php $this->beginBlock('block1'); ?>
    <h1>Заглавие страницы</h1>
<?php $this->endBlock();?>

<?php echo 'One form';?>

    <button class="btn btn-success" id="btn">Clikc my...</button>

<?php
//$this->registerJsFile('@web/js/scripts.js'); //['depends' => 'yii\web\YiiAsset']

//$this->registerJs("$('.container').append('<p>SHOW!!!</p>')");

$js = <<<JS
    $('#btn').on('click', function() {
      $.ajax({
        url: 'index',
        data: {test: '123'},
        type: 'POST',
        success: function(res){
            console.log(res)
        },
        error: function() {
          alert('Error')
        }
      })
    });
JS;

$this->registerJs($js);


<?
use yii\helpers\Html;
?>


  <div class="form_for_page_proects">
    <div class="form">
        <h2>
        <?=  $textcontactform ?>
        </h2>

        <?php echo '<div>'
          . Html::beginForm(['site/result'], 'post',['class'=>'feedback'])
          . Html::input('text', 'name', $modelcallback->name, ['class' => 'feedback__data', 'placeholder'=>'Ваше имя'])
          . Html::input('text', 'email', $modelcallback->customemail, ['class' => 'feedback__data', 'placeholder'=>'Email'])
          . Html::submitButton('Запросить', ['class' => 'feedback__btn btns'])
          . Html::endForm().' </div>';
        ?>
</div>
</div>

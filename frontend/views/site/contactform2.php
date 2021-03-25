<?
use yii\helpers\Html;
?>
<section class="more-section">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="more-pr-title title">
          Cвяжитесь с нами
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <!--  <form class="feedback" action="#">
          <input class="feedback__data" type="text" placeholder="Ваше имя" required>
          <input class="feedback__data" type="email" placeholder="Email:" required>
          <button type="button" class="feedback__btn btns">
            Хочу узнать больше
          </button>
        </form>-->
        <?php echo '<div>'
          . Html::beginForm(['site/result'], 'post',['class'=>'feedback'])
          . Html::input('text', 'name', $modelcallback->name, ['class' => 'feedback__data', 'placeholder'=>'Ваше имя'])
          . Html::input('text', 'email', $modelcallback->customemail, ['class' => 'feedback__data', 'placeholder'=>'Email'])
          . Html::submitButton('Хочу узнать больше', ['class' => 'feedback__btn btns'])
          . Html::endForm().' </div>';
        ?>

      </div>
    </div>
  </div>
</section>

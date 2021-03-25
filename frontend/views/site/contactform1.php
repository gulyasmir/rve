<?
use yii\helpers\Html;
?>
<section class="more-section">
  <img class="more-figur" src="/img/more-item.png" alt="">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-xl-7 col-xs-12">
        <h2 class="more-title title">
        <?=  $textcontactform ?>

        </h2>
      <!--  <p class="more-text">
          Мы стремимся обеспечивать высокий уровень обслуживания клиентов. Пожалуйста, заполните нашу форму обратной связи, чтобы мы могли с вами связаться.
        </p>-->
      </div>
      <div class="col-lg-4 col-xl-4 col-xs-12">
      <!--  <form class="feedback" action="#">
          <input class="feedback__data" type="text" name = "name" placeholder="Ваше имя" required>
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

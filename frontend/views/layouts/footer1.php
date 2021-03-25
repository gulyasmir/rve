<?php
use yii\helpers\Html;
//use frontend\models\Category;
use frontend\models\Contact;

  //  $footercategories = Category::find()->where(['parent_id'=>'0'])->orderBy('sort_order')->all();
  $footercontact = Contact::find()->one();

  ?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xl-3">
        <a href="#" class="ftr_logo">
            <img src="img/logo-white.png" alt="RVElektro">
        <!--  <img src="img/ftr_logo.png" alt="RVElectro">-->
        </a>
      </div>
    <!--  <div class="col-md-4 col-lg-3 col-xl-2">
        <ul class="ftr-info">
          <li>
            <h4 class="title">
              Каталог
            </h4>
          </li>
          
        </ul>
      </div>-->
      <div class="col-md-4 col-lg-3 col-xl-2">
        <ul class="ftr-info">

          <li>
            <?= Html::a('О нас', ['site/about']) ?>
          </li>
          <li>
              <?= Html::a('Контакты', ['site/proects']) ?>
          </li>
          <li>
            <?= Html::a('Новости', ['site/blog']) ?>
         </li>
          <li>
              <?= Html::a('Проекты', ['site/proects']) ?>
          </li>
          <li>
                <?= Html::a('Решения', ['site/decisions']) ?>
          </li>

        </ul>
      </div>
      <!--
      <div class="col-md-4 col-lg-3 col-xl-2">
        <ul class="ftr-info">
          <li>
            <h4 class="title">
              продукция
            </h4>
          </li>
          <li>
            <a href="#">
              Примеры
            </a>
          </li>
          <li>
            <a href="#">
              Индивидульные решения
            </a>
          </li>
          <li>
            <a href="#">
              Услуги
            </a>
          </li>
        </ul>
      </div>-->
      <div class="col-lg-3 col-xl-3">
        <ul class="ftr-contacts">
          <li class="ftr-contacts__address">
            <img src="img/maps.svg" alt="">
              <?=$footercontact->adress?>
          </li>
          <li>
            <img src="img/phone.svg" alt="">
            <p class="ftr-contacts__phones">
              <a href="tel:<?=$footercontact->tel1?>">
                <?=$footercontact->tel1?>
              </a>
              <a href="tel:<?=$contact->tel2?>">
                <?=$footercontact->tel2?>
              </a>
            </p>
          </li>
          <li class="ftr-contacts__email">
            <img src="img/envelope.svg" alt="">
            <a href="mailto:<?=$footercontact->mail?>">
            <?=$footercontact->mail?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

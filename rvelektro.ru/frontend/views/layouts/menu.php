<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use frontend\models\Category;
use frontend\models\Contact;

use frontend\models\ServisArticles; //Служебные статьи
//use yii\helpers\ArrayHelper;

$servis_articles = ServisArticles::find()->where(['to_menu'=>'1'])->all();
//$articles  = ArrayHelper::map($articles , 'id','title');


  $categories = Category::find()->where(['parent_id'=>'0'])->orderBy('sort_order')->all();
  $contact = Contact::find()->one();
?>
<header class="header">
  <div class="m-wrapp">
    <div class="m-wrapp__sub">
      <!-- DESCTOP ВЕРСИЯ -->
      <div class="m-wrapp__desctop">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="m-menu">

                <div class="m-menu__pages">
                    <ul id="nav_list_second" class="nav_list">
                    <?php foreach ($categories as $category) {

                      $podcategories = Category::find()->where(['parent_id'=>$category->id])->orderBy('sort_order')->all();
                      if ($podcategories) {  ?>
                        <li>
                              <a href="#" > <?=$category->title?> </a>
                              <ul class="item_podcategory" style="display: none;">
                                  <?php foreach ($podcategories as $podcategory) {  ?>
                                    <li>
                                      <?= Html::a($podcategory->title, ['site/category', 'id'=> $podcategory->id]) ?>
                                    </li>
                                  <?php }  ?>

                              </ul>
                        </li>
                      <?php } else { ?>
                        <li>
                              <?= Html::a($category->title, ['site/category', 'id'=> $category->id]) ?>
                        </li>
                      <?php }  ?>
                    <?php }  ?>
                </ul>
              </div>
                <ul class="m-menu__services">
                  <li>
                    <?= Html::a('О нас', ['site/about']) ?>
                  </li>

                  <li>
                        <?= Html::a('Стать партнером', ['partners/create']) ?>
                  </li>
  <?php if ($servis_articles) {  ?>
    <?php foreach ($servis_articles as $servis_article) { ?>
    <li>
      <?= Html::a($servis_article->title, ['site/servis-article', 'id' => $servis_article->id]) ?>
    </li>
  <?php  } ?>
    <?php  } ?>
                 <li>
                   <?= Html::a('Контакты', ['site/contact']) ?>
                </li>
                </ul>
                <ul class="m-menu__contacts">
                  <li>
                    <img src="/frontend/web/img/maps.svg" alt="">
                    <p>
                      <?=$contact->adress?>

                    </p>
                  </li>
                  <li>
                    <img src="/frontend/web/img/phone.svg" alt="">
                    <a href="tel:<?=$contact->tel1?>">
                      <?=$contact->tel1?>
                    </a>
                  </li>
                  <li>
                    <img src="/frontend/web/img/phone.svg" alt="">
                    <a href="tel:<?=$contact->tel2?>">
                      <?=$contact->tel2?>
                    </a>
                  </li>
                  <li>
                    <img src="/frontend/web/img/envelope.svg" alt="">
                    <a href="mailto:<?=$contact->mail?>">
                    <?=$contact->mail?>
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- МОБИЛЬНАЯ ВЕРСИЯ -->
      <div class="mob-wrapp">
        <form class="mob-wrapp__search" action="#">
          <input class="mob-wrapp__inp" type="text" required="" placeholder="Поиск">
          <button class="mob-wrapp__btn" type="button">
            <img src="/frontend/web/img/magn-grey.svg" alt="Поиск">
          </button>
        </form>
        <div class="mob-wrapp__cats">
          <ul id="nav_list_second_mobile" class="nav_list">
          <?php foreach ($categories as $category) {
          $podcategories = Category::find()->where(['parent_id'=>$category->id])->orderBy('sort_order')->all();
          if ($podcategories) {  ?>
            <li>
              <a href="#"><?=$category->title?></a>
              <ul class="item_podcategory" style="display: none;">
                      <?php foreach ($podcategories as $podcategory) {  ?>
                        <li>
                          <?= Html::a($podcategory->title, ['site/category', 'id'=> $podcategory->id]) ?>
                        </li>
                      <?php }  ?>

                  <li role="separator" class="divider"></li>
                  <li>
                      <?= Html::a($category->title, ['site/category', 'id'=> $category->id]) ?>
                  </li>
                  </ul>
            </li>
          <?php } else { ?>
            <li>
                  <?= Html::a($category->title, ['site/category', 'id'=> $category->id]) ?>
            </li>
          <?php }  ?>
        <?php }  ?>
      </ul>
      </div>
        <div class="mob-wrapp__links-wrapp">
        <!--  <p class="mob-wrapp__links-title">
            Еще немного пунктов
          </p>-->
          <ul class="mob-wrapp__links">
            <li>
              <?= Html::a('О нас', ['site/about']) ?>
            </li>
            <li>
                <?= Html::a('Проекты', ['site/proects']) ?>
            </li>
        <!--    <li>
                  <?= Html::a('Решения', ['site/decisions']) ?>
            </li>
-->
           <li>
             <?= Html::a('Контакты', ['site/contact']) ?>
           </li>


            </li>
            <li>

          </ul>
        </div>

        <div class="mob-wrapp__contacts">
          <ul class="mob-wrapp__contacts-list">
            <li>
              <img src="/frontend/web/img/maps.svg" alt="">
              <?=$contact->adress?>
            </li>
            <li>
              <img src="/frontend/web/img/phone.svg" alt="">
              <a href="tel:<?=$contact->tel1?>">
                <?=$contact->tel1?>
              </a>
            </li>
            <li>
              <img src="/frontend/web/img/phone.svg" alt="">
              <a href="tel:<?=$contact->tel2?>">
                <?=$contact->tel2?>
              </a>
            </li>
            <li>
              <img src="/frontend/web/img/envelope.svg" alt="">
              <a href="mailto:<?=$contact->mail?>">
              <?=$contact->mail?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php  //echo Yii::$app->request->url  ?>
<!--  <div class=" <?php  if ((Yii::$app->request->url == Yii::$app->homeUrl) OR (Yii::$app->request->url == '/')) { echo 'top-line';  }
   else {echo 'top-line-brown' ;}?> ">-->

   <div class="top-line scroll">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-5">
          <a href="/" class="logo">

            <img src="/frontend/web/img/logo-w.jpg" alt="RVElektro">
          </a>
        </div>
        <div class="col-7">
          <nav class="nav">
            <ul class="main-menu">
              <li>
                <?= Html::tag('p', 'Продукция', ['class' => 'bars1']) ?>

              </li>

          <!--    <li>
                  <?= Html::a('Решения', ['site/decisions']) ?>
              </li>-->
              <li>
                  <?= Html::a('Проекты', ['site/proects']) ?>
              </li>
              <li>
                <?= Html::a('Новости', ['site/blog']) ?>
             </li>
            </ul>
            <div class="search-wrapp">
              <button type="button" class="search-btn">
                <img src="/frontend/web/img/magn.svg" alt="Поиск">
              <?php //if ((Yii::$app->request->url == Yii::$app->homeUrl) OR (Yii::$app->request->url == '/')) {
              //	echo '<img src="img/magn.svg" alt="Поиск">'; }
              //	else { echo '   <img src="img/black.svg" alt="Поиск">'; }
              	?>

              </button>

        <?php echo '<div>'.Html::beginForm(['/site/search'], 'post', ['class'=>'search']).
      '  <button type="button" class="search__close">
            <img src="/frontend/web/img/search-close.svg" alt="Закрыть">
          </button>'
                        . Html::input('text', 'q', $modelsearch->q, ['class' => 'search__text'])
                        . Html::submitButton(
                           $modelsearch->q ,
                             ['class' => 'search__close ']
                             )
                        . Html::endForm().' </div>'; ?>

            <!--  <form class="search" action="#" method="POST">
                <button type="button" class="search__close">
                  <img src="img/search-close.svg" alt="Закрыть">
                </button>
                <input class="search__text" type="text" name="q" placeholder="Найти" required>
                <button type="button" class="search__search-btn">
                  <img src="img/magn-grey.svg" alt="Найти">
                </button>
              </form>-->
            </div>
            <div class="bars">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

</header>

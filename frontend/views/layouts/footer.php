<?php
use yii\helpers\Html;
use frontend\models\Category;
use frontend\models\Contact;
use frontend\models\ServisArticles; //Служебные статьи
    $footercategories = Category::find()->where(['parent_id'=>'0'])->orderBy('sort_order')->all();
  $footercontact = Contact::find()->one();
$servis_articles = ServisArticles::find()->where(['title'=>'Партнерам'])->one();
  ?>

<footer class="footer">
  <div class="container">
    <div class="row">

      <div class="col-md-2 col-lg-2 col-xl-2">
          <ul class="footer_social_menu footer_rv">
            <li> ©2019 RVElektro </li>
          </ul>
      </div>
      <div class="col-md-7 col-lg-7 col-xl-7">
        <ul class="footer_menu">

          <li>
            <?= Html::a('О нас', ['site/about']) ?>
          </li>
          <li>
            <?= Html::a('Контакты', ['site/contact']) ?>
          </li>
          <li>
            <?= Html::a('Новости', ['site/blog']) ?>
         </li>
          <li>
              <?= Html::a('Проекты', ['site/proects']) ?>
          </li>
        <!--  <li>
                <?= Html::a('Решения', ['site/decisions']) ?>
          </li>
-->
<li>

    <?= Html::a($servis_articles->title, ['site/servis-article', 'id'=>$servis_articles->id]) ?>

</li>
        </ul>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3">
          <ul class="footer_social_menu pull-right">
            <li>
<a class="social-icon icon-fb" href="https://www.facebook.com/RVElektro-586417965116014" target="_blank"> </a>
 </li>
<li>
<a class="social-icon icon-twitter" href="https://twitter.com/RVElektro"  target="_blank"> </a>              </li>
<li>
  <a class="social-icon icon-pin" href="https://www.pinterest.ru/rvelektroled " target="_blank"> </a>             </li>
<li>
      <a class="social-icon icon-insta" href="https://www.instagram.com/rvelektro_led"  target="_blank"> </a>             </li>
<li>
  <a class="social-icon icon-insta" href="https://www.instagram.com/rve_reklama"  target="_blank"> </a>              </li>
<li>
    <a class="social-icon icon-vk" href="https://vk.com/rvelektro"  target="_blank"> </a>              </li>
</ul>

      </div>
      <!-- <p class="mylink"><a target="_blank" href="http://gulyasmir.ru" title="Создание сайтов под ключ">Сайт создан gulyasmir</a></p> -->
    </div>
  </div>
</footer>

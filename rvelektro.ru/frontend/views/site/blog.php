<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\widgets\LinkPager;

$this->title = 'Новости компании RVElectro' ;
$this->registerMetaTag([
  'name' => 'description',
  'content' =>  $this->title,
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' => $this->title,
]);


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-page">
  <section class="breadcrumbs">
		<div class="container">
      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
		</div>
	</section>
  	<section class="staff-section">
  		<div class="container">

  			<div class="row">

          <?php foreach ($query as $article) {
               $string = substr( $article->text, 0, 100);
                ?>

            <div class="col-lg-2 col-md-2">
            <?= Html::a('
              <div class="staff__item">
                <div class="staff__sub-wrapp">
                  <div class="staff__photo-wrapp">
                    <img src="'. $article->img1.'" alt="">
                  </div>
                  <div class="news__date">
                    <img src="img/clock-gray.png" alt="">
                    <span>
                      <time datetime="2018-09-20">
                      '. date('d.m.Y', $article->public_date) .'
                      </time>
                    </span>
                  </div>
                  <h3 class="staff__name title">
                  '. $article->title.'
                  </h3>
                  <div class="position">
                '. $string .'
                  </div>

                  </div>
                </div>
                ', ['site/article','id'=>$article->id]) ?>

              </div>

        <?php    }  ?>


  			</div>
  		</div>
  	</section>

    <div id="pages">
      <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel' => 'В начало',
        'lastPageLabel' => 'В конец',
        'prevPageLabel' => '&laquo;'
      ]) ?>
      <span>Страница <?=$active_page?> из <?=$count_pages?></span>
      <div class="clear"></div>
    </div>

    <?php  $textcontactform = ' Начните работать с нами';
    include "contactform1.php"; ?>
</div>

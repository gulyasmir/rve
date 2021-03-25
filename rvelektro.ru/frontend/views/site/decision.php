<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->title =  $query->title ;
$this->registerMetaTag([
  'name' => 'description',
  'content' =>  $query->title,
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' => $query->title,
]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-page">
  <?php
    $img1 = $query->img1;
    $img2 = $query->img2;
    $img3 = $query->img3;
    $title = $query->title;
    include "slyder.php";
   ?>
  <section class="breadcrumbs">
		<div class="container">
      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
		</div>
	</section>
	<section class="info-section">
		<div class="description-wrapp">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 class="info-title title">
				<?=$query->title ?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-xl-12">
						<div class="product-info">
				<?=$query->text ?>
            	</div>
					</div>

				</div>
			</div>
		</div>
	</section>

  <?php  include "contactform2.php"; ?>

  <section class="proects-section">
<!--        <h3>Похожие решения</h3>
    <div class="row">
    <div class="col-lg-2 col-md-2">
      <?= Html::a('
        <div class="staff__item">
          <div class="staff__sub-wrapp">
            <div class="staff__photo-wrapp">
              <img src="img/gl-img-1.png" alt="">
            </div>
            <h3 class="staff__name title">
            Название товара
            </h3>
            <p class="position">
              Мощность 200 ВАтт
            </p>
            <p class="position">
              Освещенность 300 Лм
            </p>
            </div>
          </div>
          ', ['site/proect']) ?>

        </div>
-->
<!--

        <div class="col-lg-2 col-md-2">
        <?= Html::a('
          <div class="staff__item">
            <div class="staff__sub-wrapp">
              <div class="staff__photo-wrapp">
                <img src="img/gl-img-1.png" alt="">
              </div>
              <h3 class="staff__name title">
              Название товара
              </h3>
              <p class="position">
                Мощность 200 ВАтт
              </p>
              <p class="position">
                Освещенность 300 Лм
              </p>
              </div>
            </div>
            ', ['site/proect']) ?>

          </div>


          <div class="col-lg-2 col-md-2">
          <?= Html::a('
            <div class="staff__item">
              <div class="staff__sub-wrapp">
                <div class="staff__photo-wrapp">
                  <img src="img/gl-img-1.png" alt="">
                </div>
                <h3 class="staff__name title">
                Название товара
                </h3>
                <p class="position">
                  Мощность 200 ВАтт
                </p>
                <p class="position">
                  Освещенность 300 Лм
                </p>
                </div>
              </div>
              ', ['site/proect']) ?>

            </div>

        </div>-->
  </section>
</div>

<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->title =  $query->title ;
$this->registerMetaTag([
  'name' => 'description',
  'content' =>  $query->description,
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' => $query->keywords,
]);
   $this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['proects']];
//   $this->params['breadcrumbs'][] = $this->title;

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
					<div class="col-lg-6 col-xl-8">
						<div class="product-info">
              <?=$query->text ?>
          	</div>
					</div>
					<div class="col-lg-5 col-xl-3 offset-lg-1">
					<?=$query->adress ?>
					</div>
				</div>
			</div>
		</div>

	</section>

  <?php  include "contactform2.php"; ?>


</div>

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

//
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-page">

  <!--  <h1><?= Html::encode($this->title) ?></h1>-->
  <div class="hdr-play">
    <?=$query->video  ?>
    <!--<div class="play">
      <button class="play__btn">
        <img src="img/play-button.png" alt="Play">
      </button>
      <p class="play__text">
        play
      </p>
    </div>-->
  </div>
  <section class="breadcrumbs">
    <div class="container">
      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>
  </section>
    <section class="about-section">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-4">
  					<h1 class="about-title title">
  					  <?=$query->title1  ?>
  					</h1>
  				</div>
  				<div class="col-xl-8">
  					<div class="about-text">
  					  <?=$query->text1  ?>	</div>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-lg-4">
  					<div class="profit">
  						<div class="profit__icon">
  							<img src="img/conveyor.png" alt="Cобственное производство">
  						</div>
  						<h3 class="profit__title title">
  							Cобственное производство
  						</h3>
  					</div>
  				</div>
  				<div class="col-lg-4">
  					<div class="profit">
  						<div class="profit__icon">
  							<img src="img/blueprint.png" alt="Уникальная продукция">
  						</div>
  						<h3 class="profit__title title">
  							Уникальная продукция
  						</h3>
  					</div>
  				</div>
  				<div class="col-lg-4">
  					<img src="img/figur.png" alt="" class="profit__last-item">
  					<div class="profit">
  						<div class="profit__icon">
  							<img src="img/network.png" alt="Индивидуальный подход">
  						</div>
  						<h3 class="profit__title title">
  							Индивидуальный подход
  						</h3>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="tagline-section">
  		<div class="container">
  			<div class="row no-gutters">
  				<div class="col-lg-5 col-xl-7">
  					<img src="img/tagline.png" alt="" class="tagline-img">
  				</div>
  				<div class="col-lg-7 col-xl-5">
  					<div class="tagline">
  						<h2 class="tagline__title title">
  						 <?=$query->title2  ?>
  						</h2>
  						<div class="tagline__text">
  						 <?=$query->text2  ?>	</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="staff-section">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-4">
  					<h2 class="staff-title title">
  					 <?=$query->title3  ?>
  					</h2>
  				</div>
  				<div class="col-xl-8">
  					<p class="staff-text">
              <?=$query->text3  ?>
          	</p>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col">
  					<div class="staff">
<?php
foreach ($workers as $work) { ?>
  <div class="staff__item">
    <div class="staff__sub-wrapp">
      <div class="staff__photo-wrapp">
        <img src=" <?= $work->foto ?>" alt="">
      </div>
      <h3 class="staff__name title">
      <?= $work->name ?>
      </h3>
      <p class="position">
        <?= $work->position ?>
      </p>
    </div>
  </div>
<?php  }  ?>


  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="for-section">
  		<div class="container">
  			<div class="row no-gutters">
  				<div class="col-lg-7 col-xl-5">
  					<div class="for">
  						<h2 class="for__title title">
  						 <?=$query->title4  ?>
  						</h2>
  						<p class="for__text">
  						 <?=$query->text4  ?>
             	</p>
  					</div>
  				</div>
  				<div class="col-lg-5 col-xl-7">
  					<img src="img/for-img.jpg" alt="" class="for-img">
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="production-section">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-4">
  					<h1 class="production-title title">
  					 <?=$query->title5  ?>
  					</h1>
  				</div>
  				<div class="col-xl-8">
  					<p class="production-text">
              <?=$query->text5  ?>
          	</p>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="warranty-section">
  		<div class="container">
  			<div class="row no-gutters">
  				<div class="col-lg-5 col-xl-7">
  					<img src="img/warranty_bg.jpg" alt="" class="warranty-img">
  				</div>
  				<div class="col-lg-7 col-xl-5">
  					<div class="warranty">
  						<h2 class="warranty__title title">
  					 <?=$query->title6  ?>
  						</h2>
  						<p class="warranty__text">
  						 <?=$query->text6  ?>
             	</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
    <?php  $textcontactform = ' Начните работать с нами';
    include "contactform1.php"; ?>
</div>

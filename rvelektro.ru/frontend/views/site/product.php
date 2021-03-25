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
if ($main_parent_category) {
  $this->params['breadcrumbs'][] = ['label' => $main_parent_category->title, 'url' => ['category', 'id'=>$main_parent_category->id]];
}
if ($parent_category) {
$this->params['breadcrumbs'][] = ['label' => $parent_category->title, 'url' => ['category', 'id'=>$parent_category->id]];
}
$this->params['breadcrumbs'][] = $category->title;
//$this->params['breadcrumbs'][] = ['label' => $category->title, 'url' => ['category', 'id'=>$category->id]];
//$this->params['breadcrumbs'][] = $this->title;
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
<!--  <div class="desctop">


    <div class="product-slider">
      <div class="product-slider__slide">
        <img src="<?=$query->img1?>" alt="<?=$query->title?>">
      </div>
      <div class="product-slider__slide">
        <img src="<?=$query->img2?>" alt="<?=$query->title?>">
      </div>
      <div class="product-slider__slide">
        <img src="<?=$query->img3?>" alt="<?=$query->title?>">
      </div>
    </div>
  </div>
  <div class="mobile">
    <div class="mobile-slider">
      <div class="mobile-slider__slide">
        <img src="<?=$query->img1?>" alt="<?=$query->title?>">
      </div>
      <div class="mobile-slider__slide">
        <img src="<?=$query->img2?>" alt="<?=$query->title?>">
      </div>
      <div class="mobile-slider__slide">
    <img src="<?=$query->img3?>" alt="<?=$query->title?>">
      </div>
    </div>
  </div>
-->
	<section class="info-section">
		<div class="description-wrapp">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 class="info-title title">
						<?=$query->title?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-xl-8">
            <div class="box">
    						<div class="product-info">
                  <?=$query->text?>
                </div>
            </div>
            <hr>
            	<p  id="opentext">Подробнее</p>
              <p  id="closetext">Свернуть</p>
            <!--  <hr>
                <p  style="font-size: 80%;"> Теги: <?=$query->tags?></p>-->


					</div>
					<div class="col-lg-5 col-xl-3 offset-lg-1">
						<ul class="subb-info">
                <?php  if ($query->instock)   echo "
							<li>
              	В наличии на складе в Москве.
							</li>"; ?>
							<li>
								Доставка по всей России  <?=$query->delivery?>.
							</li>
							<li>
								Фирменная гарантия и поддержка Центрсвет.
							</li>
						</ul>
						<ul class="subb-files">
            <?php if ($query->pdf1) { ?>
							<li>
								<img src="/img/download.png" alt="">
								<a href=" <?=$query->pdf1?>" download>
								<?php $info_pdf =  pathinfo($query->pdf1);
                      $name_pdf = $info_pdf['filename'];
                      echo   $name_pdf;
                ?>
								</a>
							</li>
              <?php  } ?>
              <?php if ($query->pdf2) { ?>
              <li>
								<img src="/img/download.png" alt="">
								<a href=" <?=$query->pdf2?>" download>
								<?php $info_pdf =  pathinfo($query->pdf2);
                      $name_pdf = $info_pdf['filename'];
                      echo  $name_pdf;
                ?>
								</a>
							</li>
            <?php  } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lamp-info">
			<div class="container">
				<div class="sub-line"></div>
          <!-- ================  -->

<?php  foreach ($options as $option) {  ?>
  <div class="row">
   <!-- <div class="col-md-7 col-xl-3 order-md-1 order-xl-1">-->
    <div class="col-md-7 col-xl-4 order-md-1 ">
      <img class="lamp-img" src="<?=$option->img1?>" alt="">
    </div>
  <!--  <div class="col-md-7 col-xl-6 order-md-3 order-xl-2">-->
  <div class="col-md-7 col-xl-5 order-md-3">
      <img class="lamp-size" src="<?=$option->img2?>" alt="">
    </div>
    <div class="col-md-5 col-xl-3 order-md-2 order-xl-3">
      <div class="lamp-char">
        <h3 class="lamp-char__name title">
        <?=$option->title?>
        </h3>
        <div class="lamp-char__info">
          <?=$option->text?>
        </div>
        <div class="lamp-char__buy">
          <span class="lamp-char__price">
      цена  <?=$option->price?> руб.
          </span>
        <!--	<button class="lamp-char__btn" type="button">
            Выбрать
          </button>-->
        </div>
      </div>
    </div>
  </div>
<hr>
<?php  }  ?>
        <!-- ================  -->
			</div>
		</div>
	</section>

  <?php  include "contactform2.php"; ?>

	<section class="gallery-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-xs-12">
					<!--	<a href="#" data-lightbox="image-1" data-title="My caption">-->
						<div class="video-wrap">
						<!--	<img src="img/mdm-zigzag.jpg" alt="">
							<div class="gl-play">
								<img src="img/play-button.png" alt="Play">
							</div>-->
<?php  if ($query->footer_video) {
     echo $query->footer_video;
}
 ?>
						</div>
				<!--	</a>-->
				</div>
				<div class="col-md-6 col-xl-3 col-xs-12">
				    <?php  if ($query->footer_img_1) { ?>
				     <?php  if ($query->link_footer_img_1) { ?>
					<a target="_blank" href="<?=$query->link_footer_img_1 ?>" >
						<div class="gl-img gl-img_long">
							<img src="<?=$query->footer_img_1 ?>" alt="">
						</div>
					</a>
					<?php } else  { ?>
				
						<div class="gl-img gl-img_long">
							<img src="<?=$query->footer_img_1 ?>" alt="">
						</div>
				
					<?php } ?>
						<?php } ?>
				</div>
				<div class="col-md-6 col-xl-3 col-xs-12">
					<div class="gl-sub-wrapp">
					<?php  if ($query->footer_img_2) { ?>
					<?php  if ($query->link_footer_img_2) { ?>
					<a target="_blank" href="<?=$query->link_footer_img_2 ?>" >
						<div class="gl-img gl-img_long">
							<img src="<?=$query->footer_img_2 ?>" alt="Красивый светильник">
						</div>
					</a>
					<?php } else  { ?>
				
						<div class="gl-img gl-img_long">
							<img src="<?=$query->footer_img_2?>" alt="Красивый светильник">
						</div>
				
					<?php } ?>
						<?php } ?>
						
									<?php  if ($query->footer_img_3) { ?>
					<?php  if ($query->link_footer_img_3) { ?>
					<a target="_blank" href="<?=$query->link_footer_img_3 ?>" >
						<div class="gl-img gl-img_long">
							<img src="<?=$query->footer_img_3 ?>" alt="Оригинальный светильник">
						</div>
					</a>
					<?php } else  { ?>
				
						<div class="gl-img gl-img_long">
							<img src="<?=$query->footer_img_3?>" alt="Оригинальный светильник">
						</div>
				
					<?php } ?>
						<?php } ?>
					
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

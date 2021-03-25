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

//$this->params['breadcrumbs'][] = ['label' => 'каталог', 'url' => ['category', 'id'=>$query->id_category]];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-page">
  <div class="desctop">
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
							<li>
								<img src="img/download.png" alt="">
								<a href="download/test.txt" download>
									Инструкция PDF
								</a>
							</li>
							<li>
								<img src="img/download.png" alt="">
								<a href="download/test.txt" download>
									DIALux и 3DSMax
								</a>
							</li>
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
    <div class="col-md-7 col-xl-3 order-md-1 order-xl-1">
      <img class="lamp-img" src="<?=$option->img1?>" alt="">
    </div>
    <div class="col-md-7 col-xl-6 order-md-3 order-xl-2">
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
				<div class="col-xl-6">
					<a href="img/mdm-zigzag.jpg" data-lightbox="image-1" data-title="My caption">
						<div class="video-wrap">
							<img src="img/mdm-zigzag.jpg" alt="">
							<div class="gl-play">
								<img src="img/play-button.png" alt="Play">
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-xl-3">
					<a href="img/gl-img-1.png" data-lightbox="image-1" data-title="My caption">
						<div class="gl-img gl-img_long">
							<img src="img/gl-img-1.png" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="gl-sub-wrapp">
						<a href="img/gl-img-2.png" data-lightbox="image-1" data-title="My caption">
							<img src="img/gl-img-2.png" alt="">
						</a>
						<a href="img/gl-img-3.png" data-lightbox="image-1" data-title="My caption">
							<img src="img/gl-img-3.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

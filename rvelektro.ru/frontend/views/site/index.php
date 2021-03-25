<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title =  $query->title ;
$this->registerMetaTag([
  'name' => 'description',
  'content' =>  $query->description,
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' => $query->keywords,
]);

?>
<div class="header-index" style="background:#403b38 url(<?=$query->foto?>) no-repeat center top; ">
  <div class="hdr-content">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="offer">
            <h1 class="offer__title title">
            <?=$query->title1?>
            </h1>
            <div class="offer__text">
            <?=$query->text1?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-index">

  <section class="size-section">
		<div class="size-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2 class="size-title title">
						  <?=$query->title2?>
						</h2>
					</div>
					<div class="col-lg-6">
						<div class="size-test">
              <?=$query->text2?>
          	</div>
					</div>
				</div>
			</div>
		</div>
		<div class="products">
			<div class="container">
				<div class="row">

          <?php foreach ($products as $product) {  ?>
            <div class="col-md-4">
              <img class="size-icon" src="img/size.png" alt="">
              <?= Html::a('
              <div class="product__img-wrapp">
                <img src="'.$product->img_to_page_category.'" alt="'.$product->title.'">
              </div>
              <h4 class="product__title title">
            '.$product->title.'
              </h4>
                  ', ['site/product','id'=>$product->id], ['class' => 'product']) ?>
            </div>
        <?php  } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="services-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-xl-4">
					<div class="services">
						<div class="services__sub-wrapp">
							<img src="img/sketch.png" alt="" class="services__icon">
							<span class="services__num">
								01
							</span>
						</div>
						<h3 class="services__title title">
							Эксклюзив
						</h3>
						<div class="services__text">
						    <?=$query->icon1text?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="services">
						<div class="services__sub-wrapp">
							<img src="img/info.png" alt="" class="services__icon">
							<span class="services__num">
								02
							</span>
						</div>
						<h3 class="services__title title">
							Тех. Сопровождение
						</h3>
            <div class="services__text">
                <?=$query->icon2text?>
            </div>

				<!--		<ul class="services__text-list">
							<li>
								<span>

								</span>
							</li>
						</ul>
						<ul class="services__text-list">
							<li>
								<span>
									помощь в проектах
								</span>
							</li>
						</ul>
						<ul class="services__text-list">
							<li>
								<span>
									расчеты в DiaLux
								</span>
							</li>
						</ul>
						<ul class="services__text-list">
							<li>
								<span>
									и многое другое
								</span>
							</li>
						</ul>-->
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="services">
						<div class="services__sub-wrapp">
							<img src="img/fluorescent.png" alt="" class="services__icon">
							<span class="services__num">
								03
							</span>
						</div>
						<h3 class="services__title title">
							Магистральный свет
						</h3>
						<div class="services__text">
						  <?=$query->icon3text?>
            </div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="services">
						<div class="services__sub-wrapp">
							<img src="img/bucket.png" alt="" class="services__icon">
							<span class="services__num">
								04
							</span>
						</div>
						<h3 class="services__title title">
							Покраска
						</h3>
						<div class="services__text">
					  <?=$query->icon4text?>
          	</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="services">
						<div class="services__sub-wrapp">
							<img src="img/tool.png" alt="" class="services__icon">
							<span class="services__num">
								05
							</span>
						</div>
						<h3 class="services__title title">
							Интеграция
						</h3>
						<div class="services__text">
						  <?=$query->icon5text?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="services">
						<div class="services__sub-wrapp">
							<img src="img/desk-lamp.png" alt="" class="services__icon">
							<span class="services__num">
								06
							</span>
						</div>
						<h3 class="services__title title">
							Функционал
						</h3>
						<div class="services__text">
						  <?=$query->icon6text?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="project-section">
		<div class="container">
			<div class="row">
        <?php  for ($i=0; $i < 3; $i++) {
          if ($i==0){ ?>
            <div class="col-lg-6 col-xl-4">
              <div class="project">
                <h2 class="project__main-title title">
                  Наши проекты
                </h2>

                <?= Html::a('
                <img class="project__img" src="'.$proects[$i]->img_to_page_index.'" alt="'.$proects[$i]->title.'">
                <div class="project__info">
              <!--    <h3 class="project__title title">
                '.$proects[$i]->title.'
                  </h3>-->
                  <p class="project__name project__name_first">
                '.$proects[$i]->title.'
                  </p>
                </div>
                ', ['site/proect','id'=>$proects[$i]->id], ['class' => 'project__wrapp']) ?>
              </div>
            </div>
        <?php  } elseif ($i==1){ ?>
          <div class="col-lg-6 col-xl-4">
            <div class="project">
                <?= Html::a('

                <img class="project__img" src="'. $proects[$i]->img_to_page_index.'"  alt="'.$proects[$i]->title.'">
                <div class="project__info">
                <!--  <h3 class="project__title title">
                  '.$proects[$i]->title.'
                  </h3>-->
                  <p class="project__name project__name_two">
                      '.$proects[$i]->title.'
                  </p>
                </div>
              ', ['site/proect','id'=>$proects[$i]->id], ['class' => 'project__wrapp']) ?>
            </div>
          </div>
    <?php    } else {  ?>
            <div class="col-lg-6 col-xl-4">
              <div class="project">
                  <?= Html::a('

                  <img class="project__img" src="'. $proects[$i]->img_to_page_index.'"  alt="'.$proects[$i]->title.'">
                  <div class="project__info">
                  <!--  <h3 class="project__title title">
                    '.$proects[$i]->title.'
                    </h3>-->
                    <p class="project__name project__name_three">
                        '.$proects[$i]->title.'
                    </p>
                  </div>
                ', ['site/proect','id'=>$proects[$i]->id], ['class' => 'project__wrapp']) ?>
              </div>
            </div>
          <?php    } ?>
          <?php  } ?>
			</div>
			<div class="row">
				<div class="col">
					<div class="project-text">
              <?=$query->text3?>
        	</div>
				</div>
			</div>
		</div>
	</section>

    <?php  $textcontactform = '	Для архитекторов и дизайнеров мы предлагаем особые условия сотрудничества!';
    include "contactform1.php"; ?>

	<section class="news-srction">
		<div class="container">
			<div class="row">
        <?foreach ($blogs as $article) {
           $string = substr( $article->text, 0, 200);
           ?>

				<div class="col-md-6 col-xl-4">
          <?= Html::a('
          <div class="news__img-wrap">
            <img src="'.$article->img1.'" alt="'.$article->title.'">
          </div>
          <div class="news__date">
            <img src="img/clock-gray.png" alt="">
            <span>
              <time datetime="2018-09-20">
              '. date('d.m.Y', $article->public_date) .'
              </time>
            </span>
          </div>
          <h4 class="news__title title">
          '.$article->title.'
          </h4>
          <p class="news__text">
        '.$string.'
          </p>
        ', ['site/article','id'=>$article->id], ['class' => 'news']) ?>

				</div>
    <?php  } ?>

			</div>
		</div>
	</section>
</div>

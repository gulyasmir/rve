<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use common\widgets\Alert;


$this->title = "Поиск $q";

$this->registerMetaTag([
	'name' => 'description',
	'content' => "Поиск: $q."
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => $q
])
?>
<section>
<?php if ($q == "") { ?>
		<div class="container">
	<h2>Вы задали пустой поисковый запрос!</h2>
	</div>
<?php } else { ?>
		<div class="container">
	<h3>Результаты поиска: <?=$q?></h3>
</div>
	<?php if (!$resultsearch) { ?>
			<div class="container">
		<p>Ничего не найдено</p>
		</div>
	<?php } else { ?>


    <section class="staff-section">
  		<div class="container">

  			<div class="row">
        	<?php   foreach ($resultsearch as $result) { ?>

						<div class="col-lg-3 col-md-3 col-xs-6">
							<div class="staff__item">
						<?= Html::a('

								<div class="staff__sub-wrapp">
									<div class="staff__photo-wrapp">
										<img src="'.$result->img_to_page_category.'" alt="">
									</div>
									<h3 class="staff__name title">
								'.$result->title.'
									</h3>

									</div>

								', ['site/product', 'id'=> $result->id]) ?>
						</div>
							</div>
          <?php } ?>


  			</div>
  		</div>
  	</section>

			<br />

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

	<?php } ?>
<?php } ?>
</section>
<?php  $textcontactform = 'ДЛЯ АРХИТЕКТОРОВ И ДИЗАЙНЕРОВ МЫ ПРЕДЛАГАЕМ ОСОБЫЕ УСЛОВИЯ СОТРУДНИЧЕСТВА!';
include "contactform1.php"; ?>

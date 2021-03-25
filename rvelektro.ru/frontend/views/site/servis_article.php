<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->registerMetaTag([
  'name' => 'description',
  'content' =>  $servis_article->title,
]);
$this->registerMetaTag([
'name' => 'keywords',
   'content' => $servis_article->title,
]);

//$this->title =  $servis_article->title ;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-page">

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
				<?=$servis_article->title ?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-xl-12">
						<div class="product-info">
              <?=$servis_article->text ?>
        		</div>
					</div>

				</div>
			</div>
		</div>
	</section>

<?php  include "contactform2.php"; ?>

</div>

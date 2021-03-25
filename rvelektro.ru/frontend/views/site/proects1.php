<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->title =  'Проекты';
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
<div class="catalog-page">
  <section class="breadcrumbs">
		<div class="container">
      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
		</div>
	</section>
  	<section class="proects-section">
        <h1><?= Html::encode($this->title) ?></h1>
      <div class="row">

        <?php foreach ($query as $proect) {  ?>

          <div class="col-lg-4">
              <?= Html::a('
              <div class="profit">
                <div class="profit__icon">
                  <img src="'.$proect->img1.'" alt="'.$proect->title.'">
                </div>
                <h3 class="profit__title title">
              '.$proect->title.'
                </h3>
              </div>
              ', ['site/proect', 'id' => $proect->id]) ?>
          </div>
        <?php   } ?>

    			</div>
  	</section>
    <?php  $textcontactform = ' Начните работать с нами';
    include "contactform1.php"; ?>

</div>

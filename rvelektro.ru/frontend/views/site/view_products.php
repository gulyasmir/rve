<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\widgets\LinkPager;

use frontend\models\Product;


?>
<div class="row">
      <div class="col-lg-2 col-md-3 col-xs-6">
<h2 class="podcat">
    <?php echo Html::a("
    <p  data-toggle='tooltip' data-placement='bottom' title='".$name_series->description."'>".$name_series->title."</p>", ['site/category', 'id'=> $name_series->id]) ?>
   
</h2>
      </div>
      <div class="col-lg-10 col-md-9 col-xs-6">
      <?php foreach ($array_product as $product) { ?>

    <div class="col-lgg-3 col-lg-4 col-md-6 col-xs-6">
      <div class="staff__item">

    <?= Html::a('

        <div class="staff__sub-wrapp">
          <div class="staff__photo-wrapp">
            <img src="'.$product->img_to_page_category.'" alt="">
          </div>
          <h3 class="staff__name title">
        '.$product->title.'
          </h3>

          </div>

        ', ['site/product', 'id'=> $product->id]) ?>
    </div>
      </div>

    <?php } ?>
      </div>
        </div>

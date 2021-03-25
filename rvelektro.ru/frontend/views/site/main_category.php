<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\widgets\LinkPager;

use frontend\models\Product;

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
  	<div class="container">
<!--  <h1><?= Html::encode($this->title) ?></h1>-->
</div>
  	<section class="staff-section">
  		<div class="container">

  <?php    foreach ($podcats as $podcat) {
          $array_product = Product::find()->where(['id_category'=>$podcat->id])->orderBy(['sort_order' => SORT_ASC])->all();
              if ($array_product) {
               $name_series = $podcat;
                include "view_products.php";
              }
            }

     if ($podcats_1)  {

 foreach ($podcats_1 as $podcat_1) {

foreach ($podcat_1 as $podcat_2) {

        $array_product = Product::find()->where(['id_category'=>$podcat_2->id])->orderBy(['sort_order' => SORT_ASC])->all();
        if ($array_product) {
          $name_series = $podcat_2;
           include "view_products.php";
         }
     }
   }
}

?>

	</div>
  	</section>
<div class="container">


  <?=$query->text?>
</div>
  <?php  $textcontactform = 'Для архитекторов и дизайнеров мы предлагаем особые условия сотрудничества!';
  include "contactform1.php"; ?>

</div>

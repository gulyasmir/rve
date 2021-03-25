<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">


    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?php  if ($name_category){
        echo "<p style='color:#4cae4c;'> Пожалуйста, удалите товары, принадлежащие категории <b> ".$name_category." </b></p>";
    }
  ?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<hr>
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
          //  'id_category',
            'title',
            'img_to_page_category:image',
          //  'text:ntext',
            // 'img1',
            // 'img2',
            // 'img3',
            // 'pdf1',
            // 'pdf2',
            // 'instock',
            // 'delivery',
            // 'sort_order',
            // 'to_index',
             [
                 'label' => 'Показывать в на главной',
                 'value' => function ($data) {
                   if ($data->to_index == 1) {
                     return  'Да' ;
                   } else {
                       return  'Нет';
                   }


                 }],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

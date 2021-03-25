<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Опции для товара '.$title_product;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['product/index']];
$this->params['breadcrumbs'][] = ['label' => $title_product, 'url' => ['product/view', 'id' => $id_product]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
      <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <hr>
    <p>
        <?= Html::a('Добавить опцию', ['create', 'id_product'=>$id_product], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
          // 'id_product',
            'title',
        'img1:image',
        'img2:image',
        //    'text',
          'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

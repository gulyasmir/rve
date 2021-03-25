<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>

          <?= Html::a('Опции для этого товара', ['options/index', 'id_product' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>
    <hr>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_category',
            'title',
            'img_to_page_category:image',
            'text:ntext',
            'img1:image',
            'img2:image',
            'img3:image',
            'link_footer_img_1',
            'footer_img_1:image',
              'link_footer_img_2',
            'footer_img_2:image',
            'link_footer_img_3',
            'footer_img_3:image',        
            'footer_video',
        //    'pdf1',
            [
              'label'=>'pdf 1',
              'value' => $model->pdf1 = basename($model->pdf1)
            ],

          //  'pdf2',
            [
              'label'=>'pdf 2',
              'value' => $model->pdf2 = basename($model->pdf2)
            ],
            'instock',
            [
              'label'=>'В наличии',
              'value' => $model->instock == 1 ? 'Да' : 'Нет'
            ],
            'delivery',
            'description',
            'keywords',
            'tags',
            'sort_order',
          //  'to_index',
            [
              'label'=>'Показывать на главной',
              'value' => $model->to_index == 1 ? 'Да' : 'Нет'
            ],
        ],
    ]) ?>

</div>

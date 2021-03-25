<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Options */

$this->title = 'Изменить: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['product/index']];
$this->params['breadcrumbs'][] = ['label' => $title_product, 'url' => ['product/view', 'id' => $id_product]];
$this->params['breadcrumbs'][] = ['label' => 'Опции для товара '.$title_product, 'url' => ['index', 'id_product' => $model->id_product]];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
          'id_product'=>$id_product
    ]) ?>

</div>

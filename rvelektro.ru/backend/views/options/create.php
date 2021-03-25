<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Options */

$this->title = 'Добавить опцию ';
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['product/index']];
$this->params['breadcrumbs'][] = ['label' => $title_product, 'url' => ['product/view', 'id' => $id_product]];
$this->params['breadcrumbs'][] = ['label' => 'Опции для товара '.$title_product, 'url' => ['index', 'id_product' =>$id_product]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id_product'=>$id_product,
        'title_product'=>$title_product,
    ]) ?>

</div>

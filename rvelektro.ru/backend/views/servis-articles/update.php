<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ServisArticles */

$this->title = 'Изменить статью ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Служебные статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="servis-articles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Index */

$this->title = 'Создать ';
$this->params['breadcrumbs'][] = ['label' => 'Страница Главная', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

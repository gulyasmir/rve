<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Articles */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Служебные статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

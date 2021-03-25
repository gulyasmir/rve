<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Workers */

$this->title = 'Создать ';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'iii'=>$iii,
    ]) ?>

</div>

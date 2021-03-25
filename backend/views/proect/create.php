<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Proect */

$this->title = 'Создать ';
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

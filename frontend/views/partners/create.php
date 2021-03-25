<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Partners */

$this->title = 'Стать партнером';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="partners-create">

    <h1><?= Html::encode($this->title) ?></h1>
<br><hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proect-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

      <?php // $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?php //  $form->field($model, 'text') ?>

    <?= $form->field($model, 'adress') ?>

    <?php //  $form->field($model, 'img1') ?>

    <?php // echo $form->field($model, 'img2') ?>

    <?php // echo $form->field($model, 'img3') ?>

    <?php // echo $form->field($model, 'sort_order') ?>

    <?php // echo $form->field($model, 'to_index') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

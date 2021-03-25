<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IndexSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'keywords') ?>

    <?= $form->field($model, 'title1') ?>

    <?php // echo $form->field($model, 'text1') ?>

    <?php // echo $form->field($model, 'title2') ?>

    <?php // echo $form->field($model, 'text2') ?>

    <?php // echo $form->field($model, 'text3') ?>

    <?php // echo $form->field($model, 'icon1text') ?>

    <?php // echo $form->field($model, 'icon2text') ?>

    <?php // echo $form->field($model, 'icon3text') ?>

    <?php // echo $form->field($model, 'icon4text') ?>

    <?php // echo $form->field($model, 'icon5text') ?>

    <?php // echo $form->field($model, 'icon6text') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

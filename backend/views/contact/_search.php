<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'adress') ?>

    <?= $form->field($model, 'tel1') ?>

    <?= $form->field($model, 'tel2') ?>

    <?= $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'text1') ?>

    <?php // echo $form->field($model, 'text2') ?>

    <?php // echo $form->field($model, 'text3') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

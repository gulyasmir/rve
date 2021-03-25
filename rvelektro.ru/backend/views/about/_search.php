<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'keywords') ?>

    <?= $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'title1') ?>

    <?php // echo $form->field($model, 'text1') ?>

    <?php // echo $form->field($model, 'title2') ?>

    <?php // echo $form->field($model, 'text2') ?>

    <?php // echo $form->field($model, 'title3') ?>

    <?php // echo $form->field($model, 'text3') ?>

    <?php // echo $form->field($model, 'title4') ?>

    <?php // echo $form->field($model, 'text4') ?>

    <?php // echo $form->field($model, 'title5') ?>

    <?php // echo $form->field($model, 'text5') ?>

    <?php // echo $form->field($model, 'title6') ?>

    <?php // echo $form->field($model, 'text6') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

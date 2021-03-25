<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OptionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

      <?php // $form->field($model, 'id') ?>

        <?php //$form->field($model, 'id_product') ?>

    <?= $form->field($model, 'title') ?>

      <?php //$form->field($model, 'img1') ?>

        <?php // $form->field($model, 'img2') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Отмена', ['class' => 'btn btn-default']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>

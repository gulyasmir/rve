<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PartnersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partners-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<div class="col-md-6">
  <?php  echo $form->field($model, 'email') ?>
</div>
<div class="col-md-6">
    <?php  echo $form->field($model, 'company_name') ?>
</div>

  <?php // echo $form->field($model, 'id') ?>

  <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

      <?php // echo $form->field($model, 'city') ?>

      <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'company_activity') ?>

    <?php // echo $form->field($model, 'company_phone') ?>

    <?php // echo $form->field($model, 'company_site') ?>

    <?php // echo $form->field($model, 'brands') ?>

    <?php // echo $form->field($model, 'product') ?>

    <?php // echo $form->field($model, 'agree_newsletter') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

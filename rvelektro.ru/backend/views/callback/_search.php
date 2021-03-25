<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CallbackSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="callback-search">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

      <div class="row">
      <div class="col-md-3">

        <?= $form->field($model, 'processed')
          ->radioList([
            '1' => 'Обработанные заявки',
            '0' => 'Необработанные заявки',

          ])->label('  ');?>

  </div>
<div class="col-md-4">
    <?= $form->field($model, 'name') ?>
    </div>
<div class="col-md-5">
    <?= $form->field($model, 'customemail') ?>

    <?php //echo  $form->field($model, 'date') ?>
    </div>

</div>

    <div class="form-group ">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton('Отмена', ['class' => 'btn btn-default']) ?>
        <?= Html::a('Отмена', ['callback/index'], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

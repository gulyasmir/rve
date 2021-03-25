<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Workers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workers-form">
<h1><?php  echo $iii;?></h1>
    <?php $form = ActiveForm::begin(); ?>


    <?php
      if(isset($model->foto) && file_exists(Yii::getAlias('@webroot', $model->foto)))
      {
          echo Html::img($model->foto, ['class'=>'img-responsive']);
        //  echo $form->field($model,'del_img1')->checkBox(['class'=>'span-1']);
      }
  ?>
  <?= $form->field($model, 'file1')->fileInput()->label('Фото') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

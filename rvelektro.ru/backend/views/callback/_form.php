<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Callback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="callback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customemail')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'date')->textInput() ?>

  <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>
  
    <?= $form->field($model, 'processed')
        ->checkbox([

            'label' => 'Заявка обработана',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ],
            'disabled' => false

        ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

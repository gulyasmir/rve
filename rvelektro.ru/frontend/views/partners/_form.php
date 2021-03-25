<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Partners */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="partners-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="col-md-6">

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'placeholder'=>'Имя'])->label('') ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'placeholder'=>'Фамилия'])->label('') ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true, 'placeholder'=>'Город'])->label('') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder'=>'Контактный телефон'])->label('') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder'=>'Email'])->label('') ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true, 'placeholder'=>'Должность'])->label('') ?>


    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true, 'placeholder'=>'Полное название компании'])->label('') ?>

    <?= $form->field($model, 'company_activity')->textInput(['maxlength' => true, 'placeholder'=>'Сфера деятельности компании'])->label('') ?>
  </div>
    <div class="col-md-6">

    <?= $form->field($model, 'company_phone')->textInput(['maxlength' => true, 'placeholder'=>'Телефон офиса'])->label('') ?>

    <?= $form->field($model, 'company_site')->textInput(['maxlength' => true, 'placeholder'=>'Веб сайт компании'])->label('') ?>

    <?= $form->field($model, 'brands')->textarea(['rows' => 6, 'placeholder'=>'Основные бренды Вашего ассортимента'])->label('') ?>

    <?= $form->field($model, 'product')->textarea(['rows' => 6, 'placeholder'=>'Заинтересовавшая продукция'])->label('') ?>


    <?=   $form->field($model, 'agree_newsletter')
        ->checkbox([
             'checked ' => ' ',
            'label' => 'Согласен на Email рассылку',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ],
            'disabled' => false

        ]); ?>

    <div class="form-group">
    <p class="agree_personal">  Нажимая на кнопку "Отправить" я даю согласие на обработку персональных данных.</p>
        <?= Html::submitButton($model->isNewRecord ? 'Отправить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-secondary' : 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>
</div>

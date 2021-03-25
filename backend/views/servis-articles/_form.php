<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model backend\models\ServisArticles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servis-articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, 'text')->widget(TinyMce::className(), [
                  'options' => ['rows' => 6],
                  'language' => 'ru',
                  'clientOptions' => [
                  'plugins' => [
                      'advlist autolink lists link charmap hr preview pagebreak',
                      'searchreplace wordcount textcolor visualblocks visualchars code fullscreen nonbreaking',
                      'save insertdatetime media table contextmenu template paste image responsivefilemanager filemanager',
                  ],
                  'toolbar' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image media',
                  'external_filemanager_path' => '/backend/web/plugins/responsivefilemanager/filemanager/',
                  'filemanager_title' => 'Responsive Filemanager',
                  'external_plugins' => [
                      'filemanager' => '/backend/web/plugins/responsivefilemanager/filemanager/plugin.min.js',
                      'responsivefilemanager' => '/backend/web/plugins/responsivefilemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
                  ],
              ]
          ]);?>

    <?=   $form->field($model, 'to_menu')
        ->checkbox([
             'checked ' => ' ',
            'label' => 'Показывать в меню',
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

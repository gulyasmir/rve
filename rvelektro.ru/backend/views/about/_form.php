<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model backend\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title1')->textInput(['maxlength' => true]) ?>


      <?= $form->field($model, 'text1')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'title2')->textInput(['maxlength' => true]) ?>


      <?= $form->field($model, 'text2')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'title3')->textInput(['maxlength' => true]) ?>


      <?= $form->field($model, 'text3')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'title4')->textInput(['maxlength' => true]) ?>


      <?= $form->field($model, 'text4')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'title5')->textInput(['maxlength' => true]) ?>


      <?= $form->field($model, 'text5')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'title6')->textInput(['maxlength' => true]) ?>


      <?= $form->field($model, 'text6')->widget(TinyMce::className(), [
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

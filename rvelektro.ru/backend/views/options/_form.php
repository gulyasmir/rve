<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model backend\models\Options */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
      if(isset($model->img1) && file_exists(Yii::getAlias('@webroot', $model->img1)))
      {
          echo Html::img($model->img1, ['class'=>'img-responsive']);
        //  echo $form->field($model,'del_img1')->checkBox(['class'=>'span-1']);
      }
  ?>
  <?= $form->field($model, 'file1')->fileInput()->label('Фото 1') ?>

  <?php
    if(isset($model->img2) && file_exists(Yii::getAlias('@webroot', $model->img2)))
    {
        echo Html::img($model->img2, ['class'=>'img-responsive']);
      //  echo $form->field($model,'del_img2')->checkBox(['class'=>'span-1']);
    }
?>
<?= $form->field($model, 'file2')->fileInput()->label('Фото 2') ?>


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

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

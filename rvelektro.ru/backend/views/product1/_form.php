<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

use yii\helpers\ArrayHelper;
use backend\models\Category;

$category = Category::find()->all();
$category  = ArrayHelper::map($category , 'id','title');
/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group  pull-right">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?= $form->field($model, 'id_category')->dropDownList($category)->label('Категория') ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
      if(isset($model->img_to_page_category) && file_exists(Yii::getAlias('@webroot', $model->img_to_page_category)))
      {
          echo Html::img($model->img_to_page_category, ['class'=>'img-responsive']);
        //  echo $form->field($model,'del_img1')->checkBox(['class'=>'span-1']);
      }
  ?>
  <?= $form->field($model, 'file_img_to_page_category')->fileInput()->label('Фото для страницы категории') ?>



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

  <h3>Фото для слайдера</h3>
    <p>Для корректного отображения на слайдере изображения должно быть большими - 1900 на 845 пикселей</p>
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

    <?php
      if(isset($model->img3) && file_exists(Yii::getAlias('@webroot', $model->img3)))
      {
          echo Html::img($model->img3, ['class'=>'img-responsive']);
        //  echo $form->field($model,'del_img3')->checkBox(['class'=>'span-1']);
      }
    ?>
    <?= $form->field($model, 'file3')->fileInput()->label('Фото 3') ?>
<hr>
  <h3>Файлы PDF</h3>
    <p>Для корректного отображения у пользователей желательно назвать загружаемый файл латинскими буквами и без пробелов</p>
      <p>Если будут русские буквы, то при загрузке они изменятся на латинские</p>
<?php
  if(isset($model->pdf1) && file_exists(Yii::getAlias('@webroot', $model->pdf1)))
  {
    $basename_pdf_1 = basename($model->pdf1);
      echo   Html::tag('p', Html::encode('1) '.$basename_pdf_1), ['class' => 'pdf']);
  }
?>
    <?php echo $form->field($model, 'filepdf1')->fileInput()->label('Инструкция pdf 1') ?>
<hr>
<?php
if(isset($model->pdf2) && file_exists(Yii::getAlias('@webroot', $model->pdf2)))
{
    $basename_pdf_2 = basename($model->pdf2);
    echo   Html::tag('p', Html::encode('2) '.$basename_pdf_2), ['class' => 'pdf']);
}
?>
    <?php echo $form->field($model, 'filepdf2')->fileInput()->label('Инструкция pdf 2') ?>


<hr>

<h3>Фото и видео для футера</h3>

    <?= $form->field($model, 'link_footer_img_1')->textInput(['maxlength' => true]) ?>

      <?php
        if(isset($model->footer_img_1) && file_exists(Yii::getAlias('@webroot', $model->footer_img_1)))
        {
            echo Html::img($model->footer_img_1, ['class'=>'img-responsive']);
          //  echo $form->field($model,'del_img1')->checkBox(['class'=>'span-1']);
        }
    ?>
    <?= $form->field($model, 'file_footer_img_1')->fileInput()->label('Фото 1') ?>

  <?= $form->field($model, 'link_footer_img_2')->textInput(['maxlength' => true]) ?>

    <?php
      if(isset($model->footer_img_2) && file_exists(Yii::getAlias('@webroot', $model->footer_img_2)))
      {
          echo Html::img($model->footer_img_2, ['class'=>'img-responsive']);
        //  echo $form->field($model,'del_img2')->checkBox(['class'=>'span-1']);
      }
  ?>
  <?= $form->field($model, 'file_footer_img_2')->fileInput()->label('Фото 2') ?>

  <?= $form->field($model, 'link_footer_img_3')->textInput(['maxlength' => true]) ?>
  <?php
    if(isset($model->footer_img_3) && file_exists(Yii::getAlias('@webroot', $model->footer_img_3)))
    {
        echo Html::img($model->footer_img_3, ['class'=>'img-responsive']);
      //  echo $form->field($model,'del_img3')->checkBox(['class'=>'span-1']);
    }
  ?>
  <?= $form->field($model, 'file_footer_img_3')->fileInput()->label('Фото 3') ?>

    <?= $form->field($model, 'footer_video')->textInput(['maxlength' => true]) ?>
  <p> <i>Для корректного отображения после вставки HTML-кода поправьте размеры ifame  width="845" height="480" </i></p>
      <p>Чтобы вставить видео из  <a target="_blank" href="https://www.youtube.com"> YouTube</a>, Вам нужно щелкнуть правой кнопкой мыши непосредственно по видео и появится такое окошко.</p>
      <p> Вам нужно щелкнуть левой кнопкой мыши на "Скопировать HTML-код"</p>
        <?=  Html::img('img/upload-video.png', ['class'=>'img-backend']);?>


<hr>

    <?= $form->field($model, 'delivery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort_order')->textInput() ?>

    <?=  $form->field($model, 'instock')
        ->checkbox([
            'label' => 'В наличии',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ],
            'disabled' => false
        ]); ?>

    <?=  $form->field($model, 'to_index')
        ->checkbox([
            'label' => 'На главную',
            'labelOptions' => [
                'style' => 'padding-left:20px;'
            ],
            'disabled' => false
        ]); ?>

        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>


        <div class="form-group  pull-right">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>

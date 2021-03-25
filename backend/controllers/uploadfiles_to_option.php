<?php
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;


          $file1 = UploadedFile::getInstance($model, 'file1');
          $file2 = UploadedFile::getInstance($model, 'file2');


          if ($file1 && $file1->tempName) {
              $model->file1 = $file1;
              if ($model->validate(['file1'])) {
                  $timeupload = time();
                  $dir = Yii::getAlias('../../frontend/web/images/');
                  $fileName1 = $model->file1->baseName .'-'. $timeupload .'.' . $model->file1->extension;
                  $model->file1->saveAs($dir . $fileName1);
                  $model->file1 = $fileName1; // без этого ошибка
                  $model->img1 = '/'.$dir . $fileName1;

              }
      }

  if ($file2 && $file2->tempName) {
      $model->file2 = $file2;
      if ($model->validate(['file2'])) {
          $timeupload = time();
          $dir = Yii::getAlias('../../frontend/web/images/');
          $fileName2 = $model->file2->baseName .'-'. $timeupload .'.' . $model->file2->extension;
          $model->file2->saveAs($dir . $fileName2);
          $model->file2 = $fileName2; // без этого ошибка
          $model->img2 = '/'.$dir . $fileName2;

      }
}

<?php
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;

          $file1 = UploadedFile::getInstance($model, 'file1');
          
          if ($file1 && $file1->tempName) {
              $model->file1 = $file1;
              if ($model->validate(['file1'])) {
                  $timeupload = time();
                  $dir = Yii::getAlias('../../frontend/web/images/');
                  $fileName1 = $model->file1->baseName .'-'. $timeupload .'.' . $model->file1->extension;
                  $model->file1->saveAs($dir . $fileName1);
                  $model->file1 = $fileName1; // без этого ошибка
                  $model->foto = '/'.$dir . $fileName1;

              }
      }

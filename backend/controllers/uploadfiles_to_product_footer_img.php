<?php
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;


          $file_footer_img_1 = UploadedFile::getInstance($model, 'file_footer_img_1');
          $file_footer_img_2 = UploadedFile::getInstance($model, 'file_footer_img_2');
          $file_footer_img_3 = UploadedFile::getInstance($model, 'file_footer_img_3');



          if ($file_footer_img_1 && $file_footer_img_1->tempName) {
              $model->file_footer_img_1 = $file_footer_img_1;
              if ($model->validate(['file_footer_img_1'])) {
                  $timeupload = time();
                  $dir = Yii::getAlias('../../frontend/web/images/');
                  $fileName_footer_img_1 = $model->file_footer_img_1->baseName .'-'. $timeupload .'.' . $model->file_footer_img_1->extension;
                  $model->file_footer_img_1->saveAs($dir . $fileName_footer_img_1);
                  $model->file_footer_img_1 = $fileName_footer_img_1; // без этого ошибка
                  $model->footer_img_1 = '/'.$dir . $fileName_footer_img_1;

              }
      }

      if ($file_footer_img_2 && $file_footer_img_2->tempName) {
          $model->file_footer_img_2 = $file_footer_img_2;
          if ($model->validate(['file_footer_img_2'])) {
              $timeupload = time();
              $dir = Yii::getAlias('../../frontend/web/images/');
              $fileName_footer_img_2 = $model->file_footer_img_2->baseName .'-'. $timeupload .'.' . $model->file_footer_img_2->extension;
              $model->file_footer_img_2->saveAs($dir . $fileName_footer_img_2);
              $model->file_footer_img_2 = $fileName_footer_img_2; // без этого ошибка
              $model->footer_img_2 = '/'.$dir . $fileName_footer_img_2;

          }
    }

    if ($file_footer_img_3 && $file_footer_img_3->tempName) {
        $model->file_footer_img_3 = $file_footer_img_3;
        if ($model->validate(['file_footer_img_3'])) {
            $timeupload = time();
            $dir = Yii::getAlias('../../frontend/web/images/');
            $fileName_footer_img_3 = $model->file_footer_img_3->baseName .'-'. $timeupload .'.' . $model->file_footer_img_3->extension;
            $model->file_footer_img_3->saveAs($dir . $fileName_footer_img_3);
            $model->file_footer_img_3 = $fileName_footer_img_3; // без этого ошибка
            $model->footer_img_3 = '/'.$dir . $fileName_footer_img_3;

        }
}

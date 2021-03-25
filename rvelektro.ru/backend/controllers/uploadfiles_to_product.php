<?php
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;


          $file1 = UploadedFile::getInstance($model, 'file1');
          $file2 = UploadedFile::getInstance($model, 'file2');
          $file3 = UploadedFile::getInstance($model, 'file3');

          $file_img_to_page_category = UploadedFile::getInstance($model, 'file_img_to_page_category');

          if ($file1 && $file1->tempName) {
              $model->file1 = $file1;
              if ($model->validate(['file1'])) {
              	
              	   //Если отмечен чекбокс «удалить файл»            
              //      if($model->del_img1)
               //     {
                 //       if(file_exists(Yii::getAlias('@webroot'.$current_image)))
                //        {
                            //удаляем файл
                 //           unlink(Yii::getAlias('@webroot'.$current_image));
                       //     $model->image = '';
                //        }
               //     }
                    
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

if ($file3 && $file3->tempName) {
    $model->file3 = $file3;
    if ($model->validate(['file3'])) {
        $timeupload = time();
        $dir = Yii::getAlias('../../frontend/web/images/');
        $fileName3 = $model->file3->baseName .'-'. $timeupload .'.' . $model->file3->extension;
        $model->file3->saveAs($dir . $fileName3);
        $model->file3 = $fileName3; // без этого ошибка
        $model->img3 = '/'.$dir . $fileName3;
    }

}

if ($file_img_to_page_category && $file_img_to_page_category->tempName) {
    $model->file_img_to_page_category = $file_img_to_page_category;
    if ($model->validate(['file_img_to_page_category'])) {
        $timeupload = time();
        $dir = Yii::getAlias('../../frontend/web/images/');
        $fileName4 = $model->file_img_to_page_category->baseName .'-'. $timeupload .'.' . $model->file_img_to_page_category->extension;
        $model->file_img_to_page_category->saveAs($dir . $fileName4);
        $model->file_img_to_page_category = $fileName4; // без этого ошибка
        $model->img_to_page_category = '/'.$dir . $fileName4;

    }
}

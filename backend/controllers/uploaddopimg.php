<?php
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;

$file1 = UploadedFile::getInstance($model, 'file1');
$file2 = UploadedFile::getInstance($model, 'file2');
$file3 = UploadedFile::getInstance($model, 'file3');

$filedopimg1 = UploadedFile::getInstance($model, 'filedopimg1');
$filedopimg2 = UploadedFile::getInstance($model, 'filedopimg2');
//$filepdf1 = UploadedFile::getInstance($model, 'filepdf1');
//$filepdf2 = UploadedFile::getInstance($model, 'filepdf2');


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

  if ($filedopimg1 && $filedopimg1->tempName) {
      $model->filedopimg1 = $filedopimg1;
      if ($model->validate(['filedopimg1'])) {
          $timeupload = time();
          $dir = Yii::getAlias('../../frontend/web/images/');
          $fileName4 = $model->filedopimg1->baseName .'-'. $timeupload .'.' . $model->filedopimg1->extension;
          $model->filedopimg1->saveAs($dir . $fileName4);
          $model->filedopimg1 = $fileName4; // без этого ошибка
          $model->dopimg1 = '/'.$dir . $fileName4;

      }
}

if ($filedopimg2 && $filedopimg2->tempName) {
    $model->filedopimg2 = $filedopimg2;
    if ($model->validate(['filedopimg2'])) {
        $timeupload = time();
        $dir = Yii::getAlias('../../frontend/web/images/');
        $fileName5 = $model->filedopimg2->baseName .'-'. $timeupload .'.' . $model->filedopimg2->extension;
        $model->filedopimg2->saveAs($dir . $fileName5);
        $model->filedopimg2 = $fileName5; // без этого ошибка
        $model->dopimg2 = '/'.$dir . $fileName5;

    }
}

if ($filepdf1 && $filepdf1->tempName) {
    $model->filepdf1 = $filepdf1;
    if ($model->validate(['filepdf1'])) {
        $timeupload = time();
        $dir = Yii::getAlias('../../frontend/web/images/');
        $fileName6 = $model->filepdf1->baseName .'-'. $timeupload .'.' . $model->filepdf1->extension;
        $model->filepdf1->saveAs($dir . $fileName6);
        $model->filepdf1 = $fileName6; // без этого ошибка
        $model->pdf1 = '/'.$dir . $fileName6;
    }

}

if ($filepdf2 && $filepdf2->tempName) {
    $model->filepdf2 = $filepdf2;
    if ($model->validate(['filepdf2'])) {
        $timeupload = time();
        $dir = Yii::getAlias('../../frontend/web/images/');
        $fileName7 = $model->filepdf1->baseName .'-'. $timeupload .'.' . $model->filepdf2->extension;
        $model->filepdf2->saveAs($dir . $fileName7);
        $model->filepdf2 = $fileName7; // без этого ошибка
        $model->pdf2 = '/'.$dir . $fileName7;
    }

}

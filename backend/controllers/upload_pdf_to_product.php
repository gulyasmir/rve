<?php
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;


          $filepdf1 = UploadedFile::getInstance($model, 'filepdf1');
          $filepdf2 = UploadedFile::getInstance($model, 'filepdf2');

 function translit($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = strip_tags($s); // убираем HTML-теги
  $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
  $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
  $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
  $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
  return $s; // возвращаем результат
}

          if ($filepdf1 && $filepdf1->tempName) {
              $model->filepdf1 = $filepdf1;
              if ($model->validate(['filepdf1'])) {
                  $timeupload = time();
                  $dir = Yii::getAlias('../../frontend/web/pdf/');
                  $name_file_pdf_1 = translit($model->filepdf1->baseName);
                  $fileName1pdf = $name_file_pdf_1 .'.' . $model->filepdf1->extension;
                  $model->filepdf1->saveAs($dir . $fileName1pdf);
                  $model->filepdf1 = $fileName1pdf; // без этого ошибка
                  $model->pdf1 = '/'.$dir . $fileName1pdf;

              }
      }

      if ($filepdf2 && $filepdf2->tempName) {
          $model->filepdf2 = $filepdf2;
          if ($model->validate(['filepdf2'])) {
              $timeupload = time();
              $dir = Yii::getAlias('../../frontend/web/pdf/');
              $name_file_pdf_2 = translit($model->filepdf2->baseName);
              $fileName2pdf = $name_file_pdf_2 .'.' . $model->filepdf2->extension;
              $model->filepdf2->saveAs($dir . $fileName2pdf);
              $model->filepdf2 = $fileName2pdf; // без этого ошибка
              $model->pdf2 = '/'.$dir . $fileName2pdf;

          }
  }

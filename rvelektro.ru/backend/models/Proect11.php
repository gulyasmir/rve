<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "svet_proect".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $adress
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property integer $sort_order
 * @property integer $to_index
 */
class Proect extends \yii\db\ActiveRecord
{
  public $file1;
  public $del_img1;

  public $file2;
  public $del_img2;

  public $file3;
  public $del_img3;

    public $file_img_to_page_index;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_proect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'adress', 'img1', 'img2', 'img3', 'sort_order'], 'required'],
            [['text', 'adress'], 'string'],
            [['sort_order', 'to_index'], 'integer'],
            [['title', 'img1', 'img2', 'img3', 'img_to_page_index'], 'string', 'max' => 255],
            [['file1','file2','file3', 'file_img_to_page_index'], 'file', 'extensions' => 'png, jpg'],
    [['del_img1','del_img2','del_img3'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'file_img_to_page_index'=>'Фото на главную страницу',
            'text' => 'Текст',
            'adress' => 'Адрес',
            'img1' => 'Фото 1',
            'img2' => 'Фото 2',
            'img3' => 'Фото 3',
            'sort_order' => 'Порядковый номер',
            'to_index' => 'На главную',
        ];
    }
}

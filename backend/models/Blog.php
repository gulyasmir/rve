<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_blog".
 *
 * @property integer $id
 * @property integer $public_date
 * @property string $title
 * @property string $text
 * @property string $img1
 * @property string $img2
 * @property string $img3
 */
class Blog extends \yii\db\ActiveRecord
{
  public $file1;
  public $del_img1;

  public $file2;
  public $del_img2;

  public $file3;
  public $del_img3;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'title', 'text', 'img1', 'img2', 'img3'], 'required'],
            [['public_date'], 'integer'],
            [['text'], 'string'],
            [['title', 'img1', 'img2', 'img3'], 'string', 'max' => 255],
            [['file1','file2','file3'], 'file', 'extensions' => 'png, jpg'],
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
            'public_date' => 'дата публикации',
            'title' => 'заголовок',
            'text' => 'текст',
            'img1' => 'фото 1',
            'img2' => 'фото 2',
            'img3' => 'фото 3',
        ];
    }
}

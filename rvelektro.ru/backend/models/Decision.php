<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_decision".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property integer $sort_order
 */
class Decision extends \yii\db\ActiveRecord
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
        return 'svet_decision';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'img1', 'img2', 'img3', 'sort_order'], 'required'],
            [['text'], 'string'],
            [['sort_order'], 'integer'],
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
            'title' => 'заголовок',
            'text' => 'текст',
            'img1' => 'фото 1',
            'img2' => 'фото 2',
            'img3' => 'фото 3',
            'sort_order' => 'порядковый номер',
        ];
    }
}

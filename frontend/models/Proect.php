<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_proect".
 *
 * @property integer $id
 * @property string $title
 * @property string $img_to_page_index
 * @property string $text
 * @property string $adress
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property integer $sort_order
 * @property integer $to_index
 * @property string $description
 * @property string $keywords
 */
class Proect extends \yii\db\ActiveRecord
{
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
            [['title', 'img_to_page_index', 'text', 'adress', 'img1', 'img2', 'img3', 'to_index', 'description', 'keywords'], 'required'],
            [['text', 'adress'], 'string'],
            [['sort_order', 'to_index'], 'integer'],
            [['title', 'img_to_page_index', 'img1', 'img2', 'img3', 'description', 'keywords'], 'string', 'max' => 255],
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
            'img_to_page_index' => 'Img To Page Index',
            'text' => 'текст',
            'adress' => 'адрес',
            'img1' => 'фото 1',
            'img2' => 'фото 2',
            'img3' => 'фото 3',
            'sort_order' => 'порядковый номер',
            'to_index' => 'на главную',
            'description' => 'Description',
            'keywords' => 'Keywords',
        ];
    }
}

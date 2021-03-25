<?php

namespace frontend\models;

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
            [['public_date', 'title', 'text', 'img1', 'img2', 'img3'], 'required'],
            [['public_date'], 'integer'],
            [['text'], 'string'],
            [['title', 'img1', 'img2', 'img3'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'public_date' => 'Public Date',
            'title' => 'Title',
            'text' => 'Text',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
        ];
    }
}

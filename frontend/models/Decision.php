<?php

namespace frontend\models;

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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
            'sort_order' => 'Sort Order',
        ];
    }
}

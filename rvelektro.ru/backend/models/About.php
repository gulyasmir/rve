<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_about".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $video
 * @property string $title1
 * @property string $text1
 * @property string $title2
 * @property string $text2
 * @property string $title3
 * @property string $text3
 * @property string $title4
 * @property string $text4
 * @property string $title5
 * @property string $text5
 * @property string $title6
 * @property string $text6
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'keywords', 'video', 'title1', 'text1', 'title2', 'text2', 'title3', 'text3', 'title4', 'text4', 'title5', 'text5', 'title6', 'text6'], 'required'],
            [['video', 'text1', 'text2', 'text3', 'text4', 'text5'], 'string'],
            [['title', 'description', 'keywords', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6', 'text6'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'название страницы',
            'description' => 'краткое описание для seo',
            'keywords' => 'ключевые слова для seo',
            'video' => 'видео',
            'title1' => 'заголовок 1',
            'text1' => 'текст 1',
            'title2' => 'заголовок 2',
            'text2' => 'текст 2',
            'title3' => 'заголовок 3',
            'text3' => 'текст 3',
            'title4' => 'заголовок 4',
            'text4' => 'текст 4',
            'title5' => 'заголовок 5',
            'text5' => 'текст 5',
            'title6' => 'заголовок 6',
            'text6' => 'текст 6',
        ];
    }
}

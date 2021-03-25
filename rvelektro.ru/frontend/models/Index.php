<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_index".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $title1
 * @property string $text1
 * @property string $title2
 * @property string $text2
 * @property string $text3
 * @property string $icon1text
 * @property string $icon2text
 * @property string $icon3text
 * @property string $icon4text
 * @property string $icon5text
 * @property string $icon6text
 * @property string $foto
 */
class Index extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_index';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'keywords', 'foto', 'title1', 'text1', 'title2', 'text2', 'text3', 'icon1text', 'icon2text', 'icon3text', 'icon4text', 'icon5text', 'icon6text'], 'required'],
            [['title1', 'text1', 'title2', 'text2', 'text3', 'icon1text', 'icon2text', 'icon3text', 'icon4text', 'icon5text', 'icon6text'], 'string'],
            [['title', 'description', 'foto', 'keywords'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'keywords' => 'Keywords',
            'title1' => 'Title1',
            'text1' => 'Text1',
            'title2' => 'Title2',
            'text2' => 'Text2',
            'text3' => 'Text3',
            'icon1text' => 'Icon1text',
            'icon2text' => 'Icon2text',
            'icon3text' => 'Icon3text',
            'icon4text' => 'Icon4text',
            'icon5text' => 'Icon5text',
            'icon6text' => 'Icon6text',
            'foto'=>'Картинка в шапку'
        ];
    }
}

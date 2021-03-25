<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_servis_articles".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $to_menu
 */
class ServisArticles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_servis_articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'to_menu'], 'required'],
            [['text'], 'string'],
            [['to_menu'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'text' => 'Текст',
            'to_menu' => 'Показывать в меню',
        ];
    }
}

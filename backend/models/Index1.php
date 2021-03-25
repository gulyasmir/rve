<?php

namespace backend\models;

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
  public $file1;
  public $del_img1;

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
            [['title', 'description', 'keywords', 'title1', 'text1', 'title2', 'text2', 'text3'], 'required'],
            [['title1',  'text1', 'title2', 'text2', 'text3'], 'string'],
            [['title', 'foto',  'description', 'keywords'], 'string', 'max' => 255],
            [['file1'], 'file', 'extensions' => 'png, jpg'],
            [['del_img1'], 'boolean'],
        ];
    }
//, 'icon1text', 'icon2text', 'icon3text', 'icon4text', 'icon5text', 'icon6text'
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'название страницы',
            'description' => 'очень краткое описание для seo',
            'keywords' => 'ключевые слова для seo',
            'title1' => 'заголовок 1 в шапку',
            'text1' => 'текст 1 в шапку',
            'title2' => 'заголовок 2',
            'text2' => 'текст 2',
            'text3' => 'текст 3  внизу страницы',
           'icon1text' => 'иконка Экслюзив',
            'icon2text' => 'иконка Тех сопровождение',
           'icon3text' => 'иконка Магистральный свет',
          'icon4text' => 'иконка Покраска',
          'icon5text' => 'иконка Интеграция',
          'icon6text' => 'иконка Функционал',
          'foto' => 'Картинка в шапку',
        ];
    }
}

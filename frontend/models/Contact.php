<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_contact".
 *
 * @property integer $id
 * @property string $adress
 * @property string $tel1
 * @property string $tel2
 * @property string $mail
 * @property string $text1
 * @property string $text2
 * @property string $text3
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress', 'tel1', 'tel2', 'mail', 'text1', 'text2', 'text3'], 'required'],
            [['adress', 'text1', 'text2', 'text3'], 'string'],
            [['tel1', 'tel2', 'mail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adress' => 'Адрес',
            'tel1' => 'Телефон 1',
            'tel2' => 'Телефон 2',
            'mail' => 'Телефон 3',
            'text1' => 'Текст 1',
            'text2' => 'Текст 2',
            'text3' => 'Текст 3',
        ];
    }
}

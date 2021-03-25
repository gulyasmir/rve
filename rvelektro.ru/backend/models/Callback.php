<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_callback".
 *
 * @property integer $id
 * @property string $name
 * @property string $customemail
 * @property integer $date
 * @property integer $processed
 * @property string $comment
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_callback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'customemail'], 'required'],
            [['date', 'processed'], 'integer'],
            [['comment'], 'string'],
            [['name', 'customemail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'customemail' => 'Почта',
            'date' => 'Дата',
            'processed' => 'Заявка обработана',
            'comment' => 'Комментарий',
        ];
    }
}

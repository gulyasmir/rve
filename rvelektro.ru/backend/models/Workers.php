<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_workers".
 *
 * @property integer $id
 * @property string $foto
 * @property string $name
 * @property string $position
 * @property integer $sort_order
 */
class Workers extends \yii\db\ActiveRecord
{

  public $file1;
  public $del_img1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_workers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foto', 'name', 'position', 'sort_order'], 'required'],
            [['sort_order'], 'integer'],
            [['foto', 'name', 'position'], 'string', 'max' => 255],
            [['file1'], 'file', 'extensions' => 'png, jpg'],
            [['del_img1'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'фото',
            'name' => 'имя и фамилия',
            'position' => 'должность',
            'sort_order' => 'номер по порядку',
        ];
    }
}

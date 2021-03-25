<?php

namespace frontend\models;

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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
            'name' => 'Name',
            'position' => 'Position',
            'sort_order' => 'Sort Order',
        ];
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_options".
 *
 * @property integer $id
 * @property integer $id_product
 * @property string $title
 * @property string $img1
 * @property string $img2
 * @property string $text
 * @property integer $price
 *
 * @property Product $idProduct
 */
class Options extends \yii\db\ActiveRecord
{
  public $file1;
  public $del_img1;

  public $file2;
  public $del_img2;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'title', 'text', 'price'], 'required'],
            [['id_product', 'price'], 'integer'],
            [['title', 'img1', 'img2', 'text'], 'string', 'max' => 255],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['id_product' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_product' => 'Модель светильника',
            'title' => 'Название опции',
            'img1' => 'Фото1',
            'img2' => 'Фото2',
            'text' => 'Описание',
            'price' => 'Цена',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }
}

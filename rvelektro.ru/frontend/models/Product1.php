<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_product".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $title
 * @property string $text
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $pdf1
 * @property string $pdf2
 * @property integer $instock
 * @property string $delivery
 * @property string $dopimg1
 * @property string $dopimg2
 * @property integer $power
 * @property integer $lumen
 * @property integer $lightingangle
 * @property string $protection
 * @property string $materiallight
 * @property integer $moistureprotection
 * @property string $colouringtemperature
 * @property string $bodymaterial
 * @property integer $sort_order
 * @property integer $to_index
* @property integer $price
 *
 * @property Category $idCategory
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'title', 'price', 'text', 'img1', 'img2', 'img3', 'pdf1', 'pdf2', 'instock', 'delivery', 'dopimg1', 'dopimg2', 'power', 'lumen', 'lightingangle', 'protection', 'materiallight', 'moistureprotection', 'colouringtemperature', 'bodymaterial', 'sort_order', 'to_index'], 'required'],
            [['id_category', 'instock', 'price', 'power', 'lumen', 'lightingangle', 'moistureprotection', 'sort_order', 'to_index'], 'integer'],
            [['text'], 'string'],
            [['title', 'img1', 'img2', 'img3', 'pdf1', 'pdf2', 'delivery', 'dopimg1', 'dopimg2', 'protection', 'materiallight', 'colouringtemperature', 'bodymaterial'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Id Category',
            'title' => 'Title',
            'text' => 'Text',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
            'pdf1' => 'Pdf1',
            'pdf2' => 'Pdf2',
            'instock' => 'Instock',
            'delivery' => 'Delivery',
            'dopimg1' => 'Dopimg1',
            'dopimg2' => 'Dopimg2',
            'power' => 'Power',
            'lumen' => 'Lumen',
            'lightingangle' => 'Lightingangle',
            'protection' => 'Protection',
            'materiallight' => 'Materiallight',
            'moistureprotection' => 'Moistureprotection',
            'colouringtemperature' => 'Colouringtemperature',
            'bodymaterial' => 'Bodymaterial',
            'sort_order' => 'Sort Order',
            'to_index' => 'To Index',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }
}

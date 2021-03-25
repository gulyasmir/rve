<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "svet_category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property string $text
 * @property integer $sort_order
 * @property string $description
 * @property string $keywords
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort_order'], 'integer'],
            [['title', 'text', 'sort_order', 'description', 'keywords'], 'required'],
            [['text'], 'string'],
            [['title', 'description', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'id родительской категории',
            'title' => 'категория',
            'text' => 'текст',
            'sort_order' => 'порядковый номер',
            'description' => 'краткое описание для seo и tooltip',
            'keywords' => 'ключевые слова для seo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id_category' => 'id']);
    }
}

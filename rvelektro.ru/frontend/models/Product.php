<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_product".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $title
 * @property string $img_to_page_category
 * @property string $text
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $pdf1
 * @property string $pdf2
 * @property integer $instock
 * @property string $delivery
 * @property integer $sort_order
 * @property integer $to_index
 * @property string $description
 * @property string $keywords
 * @property string $tags
 * @property string $footer_img_1
 * @property string $footer_img_2
 * @property string $footer_img_3
 * @property string $footer_video
 * @property string $link_footer_img_1
 * @property string $link_footer_img_2
 * @property string $link_footer_img_3
 *
 * @property Options[] $options
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
            [['id_category', 'title', 'img_to_page_category', 'text', 'img1', 'img2', 'img3', 'pdf1', 'pdf2', 'instock', 'delivery', 'sort_order', 'to_index', 'description', 'keywords', 'tags', 'footer_img_1', 'footer_img_2', 'footer_img_3', 'footer_video', 'link_footer_img_1', 'link_footer_img_2', 'link_footer_img_3'], 'required'],
            [['id_category', 'instock', 'sort_order', 'to_index'], 'integer'],
            [['text'], 'string'],
            [['title', 'img_to_page_category', 'img1', 'img2', 'img3', 'pdf1', 'pdf2', 'delivery', 'description', 'keywords', 'tags', 'footer_img_1', 'footer_img_2', 'footer_img_3', 'footer_video', 'link_footer_img_1', 'link_footer_img_2', 'link_footer_img_3'], 'string', 'max' => 255],
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
            'id_category' => 'категория',
            'title' => 'название',
            'img_to_page_category' => 'картинка для страницы категории',
            'text' => 'текст',
            'img1' => 'фото 1 на слайдер',
            'img2' => 'фото 2 на слайдер',
            'img3' => 'фото 3 на слайдер',
            'pdf1' => 'инструкция pdf 1',
            'pdf2' => 'инструкция pdf 2',
            'instock' => 'наличие на складе',
            'delivery' => 'доставка',
            'sort_order' => 'порядковый номер',
            'to_index' => 'на главную',
            'description' => 'seo описание',
            'keywords' => 'seo ключевые слова',
            'tags' => 'теги',
            'footer_img_1' => 'Фото внизу страницы 1',
            'footer_img_2' => 'Фото внизу страницы 2',
            'footer_img_3' => 'Фото внизу страницы 3',
            'footer_video' => 'Видео внизу страницы',
            'link_footer_img_1' => 'ссылка для фото 1',
            'link_footer_img_2' => 'ссылка для фото 2',
            'link_footer_img_3' => 'ссылка для фото 3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Options::className(), ['id_product' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }
}

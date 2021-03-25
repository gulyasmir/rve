<?php

namespace backend\models;

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
  public $file1;
  public $del_img1;

  public $file2;
  public $del_img2;

  public $file3;
  public $del_img3;

  public $file_img_to_page_category;

  public $filepdf1;
  public $filepdf2;

  public $file_footer_img_1;
  public $del_footer_img_1;

  public $file_footer_img_2;
  public $del_footer_img_2;

  public $file_footer_img_3;
  public $del_footer_img_3;

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
            [['id_category', 'title', 'img_to_page_category', 'text',  'instock', 'delivery', 'description', 'keywords', 'tags'], 'required'],
            [['id_category', 'instock', 'sort_order', 'to_index'], 'integer'],
            [['text'], 'string'],
            [['title', 'img_to_page_category', 'img1', 'img2', 'img3', 'pdf1', 'pdf2', 'delivery', 'description', 'keywords', 'tags', 'footer_img_1', 'footer_img_2', 'footer_img_3', 'footer_video', 'link_footer_img_1', 'link_footer_img_2', 'link_footer_img_3'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
            [['file1','file2','file3',  'file_img_to_page_category', 'file_footer_img_1', 'file_footer_img_2', 'file_footer_img_3'], 'file', 'extensions' => 'png, jpg'],
            [['filepdf1', 'filepdf2'], 'file', 'extensions' => 'pdf'],
            [['del_img1','del_img2','del_img3', 'del_footer_img_1', 'del_footer_img_2', 'del_footer_img_3'], 'boolean'],
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
            'footer_img_1' => 'фото внизу страницы 1',
            'footer_img_2' => 'фото внизу страницы 2',
            'footer_img_3' => 'фото внизу страницы 3',
            'footer_video' => 'видео внизу страницы',
            'link_footer_img_1' => 'ссылка для фото 1',
            'link_footer_img_2' => 'ссылка для фото 2',
            'link_footer_img_3' => 'ссылка для фото 3',
            'del_img1' => 'удалить это фото',
            'del_img2' => 'удалить это фото',
            'del_img3' => 'удалить это фото',
            
            '$del_footer_img_1' => 'удалить это фото',
            '$del_footer_img_2' => 'удалить это фото',
            '$del_footer_img_3' => 'удалить это фото',
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

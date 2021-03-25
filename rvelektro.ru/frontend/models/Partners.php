<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "svet_partners".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $city
 * @property string $phone
 * @property string $email
 * @property string $position
 * @property string $company_name
 * @property string $company_activity
 * @property string $company_phone
 * @property string $company_site
 * @property string $brands
 * @property string $product
 * @property integer $agree_newsletter
 * @property integer $date
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'svet_partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'city', 'phone', 'email', 'position', 'company_name', 'company_activity', 'company_phone'], 'required'],
            [['brands', 'product'], 'string'],
            [['agree_newsletter', 'date'], 'integer'],
            [['first_name', 'last_name', 'city', 'phone', 'email', 'position', 'company_name', 'company_activity', 'company_phone', 'company_site'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'city' => 'Город',
            'phone' => 'Телефон',
            'email' => 'Email',
            'position' => 'Должность',
            'company_name' => 'Полное название компании',
            'company_activity' => 'Сфера деятельности компании',
            'company_phone' => 'Телефон офиса',
            'company_site' => 'Веб сайт компании',
            'brands' => 'Основные бренды Вашего ассортимента',
            'product' => 'Заинтересовавшая продукция',
            'agree_newsletter' => 'Согласен на email рассылку',
            'date' => 'дата регистрации',
        ];
    }
}

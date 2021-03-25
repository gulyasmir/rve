<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CallbackForm extends Model
{
    public $name;
    public $customemail;
    public $date;


    /**
     * @inheritdoc
     */
    public function rules()
    {
       return [
            [['name', 'customemail'], 'required'],
            [['date'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['customemail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */


    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
    */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo('info@ledgc.ru')
            ->setFrom('admin@ledgc.ru')
            ->setSubject('Заказ с сайта')
            ->setTextBody('От '.$this->name.', телефон '. $this->email)
            ->send();
    }

     public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'tel' => 'Телефон',
            'date' => 'Date',
        ];
    }
}

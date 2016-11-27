<?php

namespace app\models;

use yii;
use yii\base\Model;

class Motorcycle extends Model
{
    public $country;
    public $brand;
    public $model;
    public $power;
    public $fuelConsumption;
    public $year;
    public $photo;
    public $color;
    public $email;
    public $password;
    public $verificationCode;


    public function attributeLabels()
    {
        return [
            'model' => Yii::t('app', 'Model'),
            'brand' => Yii::t('app', 'Brand'),
        ];
    }
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['model', 'brand', 'country',  'password'], 'required'],
            [['model', 'brand', 'country'], 'trim'],
            [['model', 'brand'], 'string', 'min' => 3, 'max' => 25],
            ['email', 'email'],
            ['year', 'string', 'length' => 4],
            ['year', 'number', 'min' => 1950, 'max' => date('Y')],
            ['password', 'string', 'min' => 8],
            ['power', 'number'],
            ['fuelConsumption', 'number'],
            ['color', 'match', 'pattern' => '/[a-f0-9]{6}/i'],
            ['photo', 'image'],
            ['photo', 'file', 'mimeTypes' => ['image/jpeg', 'image/png'], 'maxSize' => 1024000],
            ['verificationCode', 'captcha'],
        ];
    }
}
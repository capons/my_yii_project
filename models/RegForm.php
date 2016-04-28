<?php
/**
 * Created by PhpStorm.
 * User: Urich_notebook_2
 * Date: 28.04.2016
 * Time: 12:37
 */

namespace app\models;

use Yii;
use yii\base\Model;

class RegForm extends Model
{
    public $email;
    public $username;
    public $password;
   // public $captcha;
    public function rules()
    {
        return [
            [['email','username','password'], 'required','message' => 'enter a value for {attribute}'],
            [['email','username','password'], 'trim'],
            [['email','username','password'], 'safe'],
            [['email'],'email','message' => 'Please insert valide email'],
        ];
    }
    public static function tableName()
    {
        return 'users';
    }
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
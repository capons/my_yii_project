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
use yii\db\ActiveRecord;

class RegForm extends ActiveRecord
{
    public $useremail;
    public $username;
    public $password;
   // public $captcha;
    public function rules()
    {
        return [
            [['useremail','username','password'], 'required','message' => 'enter a value for {attribute}'],
            [['useremail','username','password'], 'trim'],
            [['useremail','username','password'], 'safe'],
            [['useremail'],'email','message' => 'Please insert valide email'],
        ];
    }
    public static function tableName()
    {
        return 'users';
    }
    public function attributeLabels()
    {
        return [
            'useremail' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\validators\RequiredValidator;

class Product extends ActiveRecord
{
    public $name; //input field name
    public $desc;
    public $p_price;
    public $cat;
    public function rules() //validate form data
    {
        return [
            [['name','desc','cat'], 'required'],
            [['name','desc'], 'safe'],
            [['name','desc','p_price','cat'], 'trim'],
            [['p_price'],'number'],
        ];
    }
    public static function tableName()
    {
        return 'product';
    }
}
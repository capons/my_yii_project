<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\validators\RequiredValidator;

class Category extends ActiveRecord
{
    public $category;  //input vield name
    public $parent_category;
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category'], 'safe'],
            [['category'], 'trim'],
        ];
    }
    public static function tableName()
    {
        return 'category';
    }
    /*
    public function getProduct()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
    */
    
}
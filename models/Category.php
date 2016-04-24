<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\validators\RequiredValidator;

class Category extends ActiveRecord
{
    public $category;  //input vield name for save data in Database
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
}
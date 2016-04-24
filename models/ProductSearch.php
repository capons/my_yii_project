<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class ProductSearch extends Product
{
    public function rules()
    {
        //в моделе поиска для отображения поисковые инпутов нужно в Ruls указать имена Lable столбца где хотим разместить input
        return [
            [['title','description','price','category'],'safe'], //category.name обозначено в Product->attributs
            [['title', 'description','price','category'], 'trim'],
            [['price'],'number'],
        ];
    }
    public function search($params)
    {
        $query = Product::find()->joinWith('category');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        // We have to do some search... Lets do some magic
        $query ->andFilterWhere(['like','title', $this->title]) //$title - form labale name
               ->andFilterWhere(['like','description', $this->description])
               ->andFilterWhere(['like','price', $this->price])
               //->andFilterWhere(['like','category.name', $this-> category]); // если раскоментируем ИНПУТ искать по написной категории в инпуте
               ->andFilterWhere(['like','category.id', $this-> category]);
        return $dataProvider;
    }

}
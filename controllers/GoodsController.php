<?php
/**
 * Created by PhpStorm.
 * User: Urich_notebook_2
 * Date: 22.04.2016
 * Time: 10:32
 */

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use app\models\Category; //include model
use app\models\Product;  //include model
class GoodsController extends Controller
{
    public function actionView()
    {
        /*
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->joinWith('category', false, 'INNER JOIN')->all(),
        ]);
        */
        //$dataProvider = Product::find()->joinWith('category')->all();
        $dataProvider = Product::find()->innerJoinWith('category')->all();
        //$test = $dataProvider->getCategory()->joinWith('product')->all();

        return $this->render('goods',['dataProvider' => $dataProvider]);
    }
}
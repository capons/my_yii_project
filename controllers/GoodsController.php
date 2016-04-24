<?php
/**
 * Created by PhpStorm.
 * User: Urich_notebook_2
 * Date: 22.04.2016
 * Time: 10:32
 */

namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Product;  //include model
use app\models\ProductSearch; //include model
class GoodsController extends Controller
{
    public function actionView()
    {
        $product_search = new ProductSearch();//product search model
        $dataProvider = $product_search->search(Yii::$app->request->get());//
        return $this->render('goods',['searchModel' => $product_search,'dataProvider' => $dataProvider]);
    }
}
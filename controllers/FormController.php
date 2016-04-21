<?php
/**
 * Created by PhpStorm.
 * User: Ира
 * Date: 20.04.2016
 * Time: 21:58
 */

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Category; //include model
use app\models\Product;

class FormController extends Controller
{
    public function actionTest()
    {
        $model = new Category();
        $product = new Product();
        $cat = Category::find() //select all product category
            ->all();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
            $model->name = $_POST['Category']['category']; //сохраняем данные из POST в таблицу с ячейкой name
            $model->parent_id = $_POST['Category']['parent_category']; //parent category
            if ($model->save())

              //  Yii::$app->response->redirect(array('form/test', 'model' => $model));
            return $this->refresh(); //if save true redirect
        }
        if($product->load(Yii::$app->request->post()) && $product->validate()) {

            $product->title = $_POST['Product']['name'];
            $product->description = $_POST['Product']['desc'];
            $product->price = $_POST['Product']['p_price'];
            $product->category_id = $_POST['Product']['cat'];

            if($product->save())
            return $this->refresh(); //if save true redirect
        } else {
            return $this->render('form', ['model' => $model,'cat' => $cat,'product' => $product]);
        }
        
        
    }

}
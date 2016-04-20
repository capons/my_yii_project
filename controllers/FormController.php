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
use app\models\EntryForm; //include model

class FormController extends Controller
{
    public function actionTest()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...
            //СОХРАНИТЬ В БАЗУ ФОРМУ




            return $this->render('form', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('form', ['model' => $model]);
        }

        //return $this->render('say', ['message' => $message]);
    }
}
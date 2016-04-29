<?php
namespace app\controllers;

use app\models\RegForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\helpers\Url;

class SiteloginController extends Controller
{
    public function actionIndex()
    {
        //$model = new RegForm();
        $this->layout = 'auth'; //select layout for view
        //return $this->render('Auth');
        return $this->render('auth', [
           // 'model' => $model,
        ]);
    }
    public function actionReg()
    {
        $model = new RegForm();
        $this->layout = 'auth'; //select layout for view
        if($model->load(Yii::$app->request->post()) && $model->validate()) { //if isset post
            $checkEmail = RegForm::find() //cheack if email isset
                ->where(['email' => $_POST['RegForm']['useremail']])
                ->one();
            if(empty($checkEmail)) { // if email no exist -> true
                $model->email = $_POST['RegForm']['useremail'];
                $model->name = $_POST['RegForm']['username'];
                $model->pass = $_POST['RegForm']['password'];
                if ($model->save())
                    \Yii::$app->getSession()->setFlash('success', 'Thank you for registration.');
                return $this->redirect(array('sitelogin/index')); //redirect
            } else {
                \Yii::$app->getSession()->setFlash('error', 'Email already axist.');
                return $this->redirect(array('sitelogin/index')); //redirect
            }
        } else {
            return $this->render('reg', [
                'model' => $model,
            ]);
        }
    }
}
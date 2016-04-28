<?php
namespace app\controllers;

use app\models\RegForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

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
        //return $this->render('Auth');
        return $this->render('reg', [
            'model' => $model,
        ]);
    }
}
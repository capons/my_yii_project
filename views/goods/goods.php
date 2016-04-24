<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Category;
?>
<h1 style="text-align: center">Отображение товара и фильтр товара</h1>
<hr>
<?= GridView::widget([
    'dataProvider' => $dataProvider, //new \yii\data\ActiveDataProvider(['query' => $dataProvider]),
    'filterModel' => $searchModel,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn',
            //'label' => 'test',
        ],
        'title',
        'description',
        [
            'attribute' => 'price',
            'format' => ['decimal', 2], //float for 2 decimal after dot
            'contentOptions' => ['class' => 'TEST-CLASS'],
            'headerOptions' => ['class' => 'TEST-CLASS-2'],
        ],
        /* если раскоментируем искать по категории по написаной в инпуте
        [
            'attribute' => 'category', //category - 'atributs' method in model Product
            'label' => 'Category', //label name
            'value' =>
                function ($res) { //show product category
                    $info = Category::findOne(['id' => $res->category_id]);
                    return isset($info->name) ? $info->name : $res->category_id; //echo category name
            },
        ],
        */
        [
            'attribute' => 'category',
            'value' =>
                function ($res) { //show product category
                    $info = Category::findOne(['id' => $res->category_id]);
                    return isset($info->name) ? $info->name : $res->category_id; //echo category name
                },
            'filter' => Html::activeDropDownList($searchModel, 'category', ArrayHelper::map(Category::find()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Category']),
        ],
    ],
]); ?>


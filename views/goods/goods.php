<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<h1 style="text-align: center">Отображение товара и фильтр товара</h1>
<hr>
<?php
//variable vich containes all category name and id
//$product = ArrayHelper::map($dataProvider, 'id','name');  //$test array from controller with category name
echo '<pre>';
print_r($dataProvider);
echo '</pre>';
?>
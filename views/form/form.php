<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
?>
<p>ПРОВЕРКА ФОРМЫ</p>






    <ul>
        <li><label>Category</label>: <?= Html::encode($model->category) ?></li>
        <li><label>Parent Category</label>: <?= Html::encode($model->parent_id) ?></li>
    </ul>

<div class="row">
    <h1 id="cat_n">Добавить категорию товара</h1>
</div>
<?php
//variable vich containes all category name and id
$category = ArrayHelper::map($cat, 'id','name');  //$test array from controller with category name
?>
<!--ADD Category block -->
<section>
    <div style="float: none;margin: 0 auto" class="col-lg-6">
        <?php $form = ActiveForm::begin([
            'id' => 'add_cat',
            'method' => 'post',
            'action' => ['form/test'],
        ]); ?>
        <?= $form->field($model, 'category')->textInput()->label('Category') ?>
        <?= $form->field($model, 'parent_category')->textInput()->label('Parent category')->dropDownList($category, [
            'prompt' => '--Select Parent Category--',
            'options' => ['840' => ['selected'=>'selected']]
        ]); ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>
<!--Add product block -->
<section>
    <div class="row">
        <h1 style="text-align: center">Добавить продукт</h1>
    </div>
    <div style="float: none;margin: 0 auto" class="col-lg-6">
        <?php $form = ActiveForm::begin([
            'id' => 'add_product',
            'method' => 'post',
            'action' => ['form/test'],
        ]); ?>
        <?= $form->field($product, 'name')->textInput()->label('Product') ?>
        <?= $form->field($product, 'desc')->textInput()->label('Description') ?>
        <?= $form->field($product, 'p_price')->textInput()->label('Price') ?>
        <?= $form->field($product, 'cat')->textInput()->label('Product category')->dropDownList($category, [
            'prompt' => '--Select Category--',
            'options' => ['830' => ['selected'=>'selected']]
        ]); ?>
        <div class="form-group">
            <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</section>


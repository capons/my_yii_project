<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>ПРОВЕРКА ФОРМЫ</p>




<p>You have entered the following information:</p>


    <ul>
        <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
        <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    </ul>


<div style="float: none;margin: 0 auto" class="col-lg-6">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

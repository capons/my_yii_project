<?php
use yii\bootstrap\Modal;
use yii\captcha\Captcha;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<div style="float: none;margin: 0 auto;" class="col-xs-4">

    <?php
    Modal::begin([
        'id' => 'reg-modal',
        'toggleButton' => ['label' => 'Get started','class' => 'btn btn-primary btn-block btn-flat open-modal','id' => 's-h-modal','data-backdrop' =>'static', 'data-keyboard' => "false",'style' => 'margin-top:20%'],
    ]); ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="#">Registration</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">


            <?php $form = ActiveForm::begin([
                'id' => 'reg-form',
                // 'options' => ['class' => 'form-horizontal'],
            ]); ?>

            <?= $form->field($model, 'email',[
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('email'),
                ],
            ])->label(false) ?>

            <?= $form->field($model, 'username',[
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('username'),
                ],
            ])->label(false) ?>

            <?= $form->field($model, 'password',[
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('password'),
                ],
            ])->label(false) ?>

            <div class="form-group">
                <div style="padding-right: 0px" class="col-lg-12">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-flat', 'name' => 'login-button','style' => 'float:right']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
            
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <?php Modal::end(); ?>
</div>
<?php
use yii\bootstrap\Modal;
use yii\captcha\Captcha;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Alert;
?>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>G</b>o</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start creativity</p>
        <form method="post">
            <div class="form-group has-feedback">
                <input type="email" name="admin_email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="admin_pass" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div style="padding-left: 0px;" class="col-xs-6">
                        <?= Html::a('Get started', ['/sitelogin/reg'], ['class'=>'btn btn-primary btn-flat']) ?> <!--Link to registr view -->
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<?php
/*
echo Captcha::widget([
    'model' => $model,
    'attribute' => 'captcha',
]);
*/
?>





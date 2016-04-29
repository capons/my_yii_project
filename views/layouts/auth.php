<?php
use app\assets\AppAssetAuth;
use yii\helpers\Html;
use yii\bootstrap\Alert;


AppAssetAuth::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>
<div class="auth-info">
<?php if(!empty(Yii::$app->session->getFlash('success'))){ ?>
    <?= Alert::widget([
        'options' => [
        'class' => 'alert-info',
            'id' => 'a-info-inside',
        ],
        'body' => Yii::$app->session->getFlash('success'),
    ]); ?>
<?php } ?>
<?php if(!empty(Yii::$app->session->getFlash('error'))){ ?>
    <?= Alert::widget([
        'options' => [
            'class' => 'alert-warning',
            'id' => 'a-info-inside',
        ],
        'body' => Yii::$app->session->getFlash('error'),
    ]); ?>
<?php } ?>
</div>

<?= $content ?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

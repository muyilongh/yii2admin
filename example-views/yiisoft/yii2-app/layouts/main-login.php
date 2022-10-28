<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

Yjl\yii2admin\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style type="text/css">
    .login-page {
        background: url("<?=\Yii::$app->request->hostInfo?>/static/login.jpg") no-repeat center center fixed;
        background-size: cover;	
    }
</style>

<body class="login-page">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

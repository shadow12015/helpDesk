<?php
use yii\helpers\html;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <?=Html::csrfMetaTags() ?>
    <title><?= HTML::encode($this->title) ?> </title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="row">
        <div class="logo">
            <img src="../image/logo.png" title="Аникс ТД">
        </div>
        <div class="links">
            <p>Ссылка 1</p>
        </div>
    </div>
</header>
            <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


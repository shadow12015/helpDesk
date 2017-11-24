<?php
use yii\helpers\html;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $content string */
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
<header>Начало тестового шаблона</header>
<?= $content ?>
<footer>Конец тестового шаблона</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
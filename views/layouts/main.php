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
    <div class="container-fluid">
        <div class="row">
            <main class="contentSystem">
                <?= $content ?>
            </main>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


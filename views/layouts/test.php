<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="">
<head>
    <title></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="test">
        <?= $content ?>
    </div>

<footer class="end">

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

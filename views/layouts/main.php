<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>

    <?php $this->head() ?> <!--llama a los css y js de appAsset.php-->
<?= Html::csrfMetaTags() ?>


</head>
<body>
	
<?php $this->beginBody() ?>

    <?= $content ?>
  <footer class="footer">
    <div class="container">
        <p class="center control-label" style="color:grey">Desarrollado por: Gabriel Díaz y Marcos Riveros <?= date('Y') ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

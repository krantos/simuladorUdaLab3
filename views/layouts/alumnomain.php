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
	<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">Simulador - Alumno</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo Url::to(['empresas/index'])?>">Empresa</a>
                </li>
                <li><a href="<?php echo Url::to(['miembros/index']) ?>">Miembros</a>
                </li>
                <li><a href="<?php echo Url::to(['alumno/decisiones'])?>">Tomar Decisiones</a>
                </li>
                <li><a href="<?php echo Url::to(['alumno/mercado'])?>">Mercado</a>
                </li>
                <li><a href="<?php echo Url::to(['site/index'])?>">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

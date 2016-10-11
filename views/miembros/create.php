<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Miembros */

$this->title = 'Create Miembros';
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<head>
    <link rel="stylesheet" href="css/crearEmpresa.css">
</head>
<div class="miembros-create container">
	<h1>Nuevo Miembro</h1>
    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

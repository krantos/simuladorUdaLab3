<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Miembros */

$this->title = 'Update Miembros: ' . $model->miembro_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->miembro_id, 'url' => ['view', 'id' => $model->miembro_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<head>
    <link rel="stylesheet" href="css/update.css">
</head>
<div class="miembros-update container">

    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

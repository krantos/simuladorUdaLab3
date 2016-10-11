<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empresas */

$this->title = 'Actualizar empresa: ' . $model->empresa_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empresa_id, 'url' => ['view', 'id' => $model->empresa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<head>
  
</head>
<div class="empresas-update container">

    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

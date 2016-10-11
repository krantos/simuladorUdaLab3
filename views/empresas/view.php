<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;



/* @var $this yii\web\View */
/* @var $model app\models\Empresas */

$this->title = $model->empresa_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<head>

</head>
<div class="empresas-view container">

    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
      'model' => $model,
        'options' => ['class' => 'bordered'],
        'attributes' => [
            'empresa_id',
            'empresa_nombre',
            'empresa_estado',
            'fkZona.zona_nombre',

        ],
    ]) ?>
    <br>
    <br>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->empresa_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->empresa_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Volver a Empresas', Url::to(['empresas/index']), ['class' => 'btn btn-success']) ?>
    </p>

</div>

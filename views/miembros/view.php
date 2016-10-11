<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Miembros */

$this->title = $model->miembro_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<head>

</head>
<div class="miembros-view container">

    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'bordered'],
        'attributes' => [
            'miembro_id',
            'miembro_nombre',
            'miembro_apellido',
            'miembro_email:email',
            'fk_empresa_id',
            'fk_sisacad_legajo',
        ],
    ]) ?>
    <br>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->miembro_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->miembro_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Volver a Miembros', Url::to(['miembros/index']), ['class' => 'btn btn-success']) ?>
    </p>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclos */

$this->title = $model->ciclo_id;
$this->params['breadcrumbs'][] = ['label' => 'Ciclos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclos-view container">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ciclo_descripcion',
            'ciclo_fecha_inicio',
            'ciclo_fecha_fin',
            'ciclo_max_cant_empr',
            'ciclo_max_alum_empr',
        ],
    ]) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ciclo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ciclo_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>

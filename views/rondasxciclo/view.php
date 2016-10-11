<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rondasxciclo */

$this->title = $model->ronxsim_id;
$this->params['breadcrumbs'][] = ['label' => 'Rondasxciclos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rondasxciclo-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ronxsim_id',
            'ronxsim_fecha',
            'ronxsim_demanda',
            'fk_profesor_id',
            'fk_ciclo_id',
        ],
    ]) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ronxsim_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ronxsim_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ciclosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciclos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclos-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ciclo_descripcion',
            'ciclo_fecha_inicio',
            'ciclo_fecha_fin',
            'ciclo_max_cant_empr',
             'ciclo_max_alum_empr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        <p>
        <?= Html::a('Create Ciclos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

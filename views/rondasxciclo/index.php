<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\rondasxcicloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rondasxciclos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rondasxciclo-index container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ronxsim_fecha',
            'ronxsim_demanda',
            'fk_ciclo_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        <p>
        <?= Html::a('Create Rondasxciclo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

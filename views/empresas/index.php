<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarEmpresas */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
    <!-- link rel="stylesheet" href="css/UdasimEmpresas.css" -->
</head>

<div class="empresas-index container">

    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php  ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions'=>['class'=>'bordered color'],//opciones de la tabla
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'empresa_nombre',
            'empresa_estado',
            [
              'attribute'=>'fk_zona_id',
              'value'=>'fkZona.zona_nombre',
            ],

            ['class' => 'yii\grid\ActionColumn','buttonOptions' => ['class '=>'color ']],
        ],
    ]); ?>
    <br>
    <p>
        <?= Html::a('Crear Empresa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuscarMiembro */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Miembros';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="miembros-index container">

    <h1 class="Titulo"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions'=>['class'=>'bordered color'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'miembro_nombre',
            'miembro_apellido',
            'miembro_email:email',
            [
              'attribute'=>'fk_empresa_id',
              'value'=>'fkEmpresa.empresa_nombre',
            ],
            // 'fk_sisacad_legajo',

            ['class' => 'yii\grid\ActionColumn','buttonOptions' => ['class '=>'color ']],
        ],
    ]); ?>
    <br>
    <p>
        <?= Html::a('Nuevo miembro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

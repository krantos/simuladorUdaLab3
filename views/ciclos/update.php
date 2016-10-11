<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclos */

$this->title = 'Update Ciclos: ' . $model->ciclo_id;
$this->params['breadcrumbs'][] = ['label' => 'Ciclos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ciclo_id, 'url' => ['view', 'id' => $model->ciclo_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ciclos-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

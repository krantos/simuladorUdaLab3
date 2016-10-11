<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ciclosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciclos-search container">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'ciclo_descripcion') ?>

    <?= $form->field($model, 'ciclo_fecha_inicio') ?>

    <?= $form->field($model, 'ciclo_fecha_fin') ?>

    <?= $form->field($model, 'ciclo_max_cant_empr') ?>

    <?php // echo $form->field($model, 'ciclo_max_alum_empr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

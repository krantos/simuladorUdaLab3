<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciclos-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ciclo_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciclo_fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'ciclo_fecha_fin')->textInput() ?>

    <?= $form->field($model, 'ciclo_max_cant_empr')->textInput() ?>

    <?= $form->field($model, 'ciclo_max_alum_empr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

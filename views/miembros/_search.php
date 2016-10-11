<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BuscarMiembro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miembros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'miembro_id') ?>

    <?= $form->field($model, 'miembro_nombre') ?>

    <?= $form->field($model, 'miembro_apellido') ?>

    <?= $form->field($model, 'miembro_email') ?>

    <?= $form->field($model, 'fk_empresa_id') ?>

    <?php // echo $form->field($model, 'fk_sisacad_legajo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

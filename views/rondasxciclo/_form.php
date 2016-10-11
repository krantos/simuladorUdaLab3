<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rondasxciclo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rondasxciclo-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ronxsim_fecha')->textInput() ?>

    <?= $form->field($model, 'ronxsim_demanda')->textInput() ?>

    <?= $form->field($model, 'fk_ciclo_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\rondasxcicloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rondasxciclo-search container">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ronxsim_id') ?>

    <?= $form->field($model, 'ronxsim_fecha') ?>

    <?= $form->field($model, 'ronxsim_demanda') ?>

    <?= $form->field($model, 'fk_ciclo_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

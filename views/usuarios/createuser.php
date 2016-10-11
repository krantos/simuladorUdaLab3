<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Empresas;
use yii\helpers\Url;
use app\models\UdasimUsuarios;

/* @var $this yii\web\View */
/* @var $model app\models\Miembros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_tipo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Ingresar', Url::to(['site/login']), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

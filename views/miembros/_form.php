<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Empresas;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Miembros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miembros-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'miembro_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miembro_apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miembro_email')->textInput(['maxlength' => true]) ?>
    <?php $NombreEmpresa = ArrayHelper::map(Empresas::find()->all(), 'empresa_id', 'empresa_nombre');?>
    <?= $form->field($model, 'fk_empresa_id')->dropDownList($NombreEmpresa) ?>

    <?= $form->field($model, 'fk_sisacad_legajo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Volver a Miembros', Url::to(['miembros/index']), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

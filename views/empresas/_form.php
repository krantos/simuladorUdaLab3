<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Zonas;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Empresas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresas-form container">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'empresa_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa_estado')->dropDownList(['Inicial' =>'inicial','Confirmada'=>'confirmada','Suspendida'=>'suspendida'])?>

    <?php $zonas = ArrayHelper::map(Zonas::find()->all(), 'zona_id', 'zona_nombre');?>
    <?= $form->field($model,'fk_zona_id')->dropDownList($zonas) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Volver a Empresas', Url::to(['empresas/index']), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ciclos */

$this->title = 'Create Ciclos';
$this->params['breadcrumbs'][] = ['label' => 'Ciclos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclos-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

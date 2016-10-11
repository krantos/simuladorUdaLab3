<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rondasxciclo */

$this->title = 'Create Rondasxciclo';
$this->params['breadcrumbs'][] = ['label' => 'Rondasxciclos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rondasxciclo-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

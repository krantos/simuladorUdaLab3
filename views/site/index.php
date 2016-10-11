<?php

    use yii\helpers\Url;
    use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;

	$this->title = 'Simulador de Empresas';
?>

<div class="container">

	    <?php

			$this->title = 'Login';
			$this->params['breadcrumbs'][] = $this->title;
		?>

		<div class="site-login mobil" style="" >
   			 <?= Html::img('img/isologoAconcagua.png',$options=[
   			 		'class' => 'img-responsive',
   			 	]); ?>
	    	<h1 class="center">Simulador de Negocios - UDASIM</h1>
	    	
	    	<div class="row center">
	    		<br>
	    		<br>
	    		<?= Html::a('Ingresar', Url::to(['site/login']), ['class' => 'btn btn-success']) ?>
	    	</div>
		</div>
	
</div>
<?php
	
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
?>

<div class="administracion-index container">
    <h1 class="Titulo">Mercado</h1>

<div class="col-md-6">
    <br>

    <table class="table table-bordered table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>
				Variable
			</th>
			<th>
				Valoración
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				Ubicación del Local
			</td>
			<td>
				12%
			</td>
		</tr>
		<tr>
			<td>
				Decoración / Ambiente
			</td>
			<td>
				8%
			</td>
		</tr>
		<tr>
			<td>
				Publicidad
			</td>
			<td>
				6%
			</td>
		</tr>
		<tr>
			<td>
				Horarios de Atención
			</td>
			<td>
				9%
			</td>
		</tr>
		<tr>
			<td>
				Métodos de Pago
			</td>
			<td>
				12%
			</td>
		</tr>
		<tr>
			<td>
				Precio
			</td>
			<td>
				13%
			</td>
		</tr>
		<tr>
			<td>
				Variedad de Producto
			</td>
			<td>
				14%
			</td>
		</tr>
		<tr>
			<td>
				Calidad del Producto
			</td>
			<td>
				16%
			</td>
		</tr>
	</tbody>
</table>
</div>
<div class="col-md-6">

	<?= Html::img('img/graficho.png');?>
</div>
</div>

<?php
	
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
?>

<div class="administracion-index container">

    <h1 class="Titulo">Administracion</h1>
    <br>
    <!-- Datos de la ronda, datos de la empresa y el local-->
    <div class="">
    	<label>Numero Ronda: <?php echo 3; ?></label>
    	<label>-- Empresa: <?php echo 'Pepitos'; ?></label>
    	<label>-- Local: <?php echo 'shopping'; ?></label>
    </div>
    <br>
	<form class="form-horizontal" action="<?php echo Url::to(['alumno/envio']);?>" method="post" >
	<!-- Form Name -->
	<legend>Opciones</legend>

		<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Inversion en Calidad de Producto</label>
	  <div class="col-md-4">
	   	<select id="selectbasic" name="selectbasic" class="form-control" required>
	   	<option value=""> - - - </option>
	      <?php 
	      	foreach ($calidades as $key => $value) {
	      		echo '<option value="' . $key . '">' . $value . '</option>';
	      	}
	      ?>
	    </select> 
	    <?php  /**$form = ActiveForm::begin();
			echo $form->field($calidades_model, 'calidad_nombre')
				->dropDownList(
					$calidades,
				 	['prompt' => 'Elija una Calidad']
					);
			ActiveForm::end();
		**/?>

	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="inversionDeco">Inversion en Decoracion</label>
	  <div class="col-md-4">
	    <select id="inversionDeco" name="inversionDeco" class="form-control">
	      <option value=""> - - - </option>
	      <?php 
	      	foreach ($decoracion as $key => $value) {
	      		echo '<option value="' . $key . '">' . $value . '</option>';
	      	}
	      ?>
	    </select>
	    </select>
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="inversionPublicidad">Inversion en Publicidad</label>
	  <div class="col-md-4">
	    <select id="inversionPublicidad" name="inversionPublicidad" class="form-control">
	      <option value=""> - - - </option>
	      <?php 
	      	foreach ($publicidad as $key => $value) {
	      		echo '<option value="' . $key . '">' . $value . '</option>';
	      	}
	      ?>
	    </select>
	    </select>
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="horariosAtencion">Horario de Atencion</label>
	  <div class="col-md-4">
	    <select id="horariosAtencion" name="horariosAtencion" class="form-control">
	      <option value=""> - - - </option>
	      <?php 
	      	foreach ($horarios as $key => $value) {
	      		echo '<option value="' . $key . '">' . $value . '</option>';
	      	}
	      ?>
	    </select>
	    </select>
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="metodosPago">Metodos de Pago</label>
	  <div class="col-md-4">
	    <select id="metodosPago" name="metodosPago" class="form-control">
	      <option value=""> - - - </option>
	      <?php 
	      	foreach ($metodospago as $key => $value) {
	      		echo '<option value="' . $key . '">' . $value . '</option>';
	      	}
	      ?>
	    </select>
	    </select>
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cantLineasProduccion">Cantidad de Lineas de Produccion</label>
	  <div class="col-md-4">
	    <select id="cantLineasProduccion" name="cantLineasProduccion" class="form-control">
	     <option value=""> - - - </option>
	      <?php 
	      	foreach ($lineasprod as $key => $value) {
	      		echo '<option value="' . $key . '">' . $value . '</option>';
	      	}
	      ?>
	    </select>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="precioPromedioProducto">Precio del Producto Promedio</label>  
	  <div class="col-md-4">
	  <input id="precioPromedioProducto" name="precioPromedioProducto" placeholder="100" class="form-control input-md" type="text" required>
	  <span class="help-block">(c/100gr)</span>  
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="volumenProduccion">Volumen de Produccion</label>  
	  <div class="col-md-4">
	  <input id="volumenProduccion" name="volumenProduccion" placeholder="100" class="form-control input-md" type="text" required>
	  <span class="help-block">(un)</span>  
	  </div>
	</div>
	
	<br>
	<!-- Datos de la ronda anterior -->
	<div id="rondaAnterior">
		<legend>Ronda Anterior</legend>
		<table class="table table-striped table-bordered">
		<tr>
			<td><p>Proyeccion de ventas (kg): </p></td>
			<td><?php echo 'numero'; ?></td>
		</tr>
		<tr>
			<td><p>Proyeccion de mercado:  </p></td>
			<td><?php echo 'numero'; ?></td>
		</tr>
		<tr>
			<td><p>Demanda (Kg): </p></td>
			<td><?php echo 'numero'; ?></td>
		</tr>
		<tr>
			<td><p>Empleado en el comercial: </p></td>
			<td><?php echo '3'; ?></td>
		</tr>
		<tr>
			<td><p>Proyeccion Trimestral de Ventas:</p></td>
			<td><?php echo 'un numero grande'; ?></td>
		</tr>
		<tr>
			<td><p>Estado de las Decisiones:</p></td>
			<td><?php echo 'en Borrador'; ?></td>
		</tr>
		<tr>
			<td><p>Fecha de Cierre de Ronda:</p></td>
			<td><?php echo 'fecha'; ?></td>
		</tr>
		</table>
		
		
		
		
		
		
		
	</div>
	<br>
	<button class="btn btn-success" type="submit">Enviar Decisiones</button>
	</form>
	<br>
	<br>
</div>
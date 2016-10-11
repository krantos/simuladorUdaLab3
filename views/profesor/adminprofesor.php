<?php
  
  use yii\helpers\Html;
  use yii\helpers\Url;
  use yii\widgets\ActiveForm;
?>

<div class="administracion-index container">

    <h1 class="Titulo">Administracion - Mercado</h1>
    <br>

<form class="form-horizontal" action="<?php echo Url::to(['profesor/envio']);?>" method="post">


<!-- Form Name -->
<legend>Variables de Mercado - Profesor</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valorAlquilerBoulevardUdasim">Boulevard UDASIM</label>  
  <div class="col-md-4">
  <input id="valorAlquilerBoulevardUdasim" name="valorAlquilerBoulevardUdasim" placeholder="10000" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valorAlquilerShopping">Mega Shopping: </label>  
  <div class="col-md-4">
  <input id="valorAlquilerShopping" name="valorAlquilerShopping" placeholder="5000" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valorAlquilerCity">City:</label>  
  <div class="col-md-4">
  <input id="valorAlquilerCity" name="valorAlquilerCity" placeholder="2000" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosDecoracionLujo">Nivel Lujo: </label>  
  <div class="col-md-4">
  <input id="costosDecoracionLujo" name="costosDecoracionLujo" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosDecoracionTop">Nivel Top: </label>  
  <div class="col-md-4">
  <input id="costosDecoracionTop" name="costosDecoracionTop" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosDecoracionMedio">Nivel Medio</label>  
  <div class="col-md-4">
  <input id="costosDecoracionMedio" name="costosDecoracionMedio" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosDecoracionEstandar">Nivel Estandar</label>  
  <div class="col-md-4">
  <input id="costosDecoracionEstandar" name="costosDecoracionEstandar" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosPublicidadBaja">Inversion Baja: </label>  
  <div class="col-md-4">
  <input id="costosPublicidadBaja" name="costosPublicidadBaja" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosPublicidadMedia">Inversion Media</label>  
  <div class="col-md-4">
  <input id="costosPublicidadMedia" name="costosPublicidadMedia" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosPublicidadAlta">Inversion Alta: </label>  
  <div class="col-md-4">
  <input id="costosPublicidadAlta" name="costosPublicidadAlta" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costosPublicidadMuyAlta">Inversion Muy Alta: </label>  
  <div class="col-md-4">
  <input id="costosPublicidadMuyAlta" name="costosPublicidadMuyAlta" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="maxHsExtraHorarioCorrido">Horario - Corrido</label>  
  <div class="col-md-4">
  <input id="maxHsExtraHorarioCorrido" name="maxHsExtraHorarioCorrido" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="maxHsExtraHorarioRegular">Horario - Regular</label>  
  <div class="col-md-4">
  <input id="maxHsExtraHorarioRegular" name="maxHsExtraHorarioRegular" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="maxHsExtraHorarioExtendido">Horario - Extendido</label>  
  <div class="col-md-4">
  <input id="maxHsExtraHorarioExtendido" name="maxHsExtraHorarioExtendido" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Form Name -->
<legend>Incrementos de costos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="incrementoCostoLineaAlta">Linea Variedad Alta:</label>  
  <div class="col-md-4">
  <input id="incrementoCostoLineaAlta" name="incrementoCostoLineaAlta" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="incrementoCostoLineaMedia">Linea Variedad Media:</label>  
  <div class="col-md-4">
  <input id="incrementoCostoLineaMedia" name="incrementoCostoLineaMedia" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="incrementoCostoLineaBaja">Linea Variedad Baja:</label>  
  <div class="col-md-4">
  <input id="incrementoCostoLineaBaja" name="incrementoCostoLineaBaja" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="incrementoCostoCalidadEstandar">Calidad Estandar: </label>  
  <div class="col-md-4">
  <input id="incrementoCostoCalidadEstandar" name="incrementoCostoCalidadEstandar" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="incrementoCostoCalidadEspecial">Calidad Especial:</label>  
  <div class="col-md-4">
  <input id="incrementoCostoCalidadEspecial" name="incrementoCostoCalidadEspecial" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="incrementoCostoCalidadPremium">Calidad Premium:</label>  
  <div class="col-md-4">
  <input id="incrementoCostoCalidadPremium" name="incrementoCostoCalidadPremium" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costoPenalizacionVolProduccion">Costo de penalizacion por mejorar Vol. Produccion</label>  
  <div class="col-md-4">
  <input id="costoPenalizacionVolProduccion" name="costoPenalizacionVolProduccion" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sobreCostosHorasExtras">Sobre Costo de las Horas Extras</label>  
  <div class="col-md-4">
  <input id="sobreCostosHorasExtras" name="sobreCostosHorasExtras" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costoFinancieroTarjetasCredito">Costo Financiero en Tarjetas de Crédito (%): </label>  
  <div class="col-md-4">
  <input id="costoFinancieroTarjetasCredito" name="costoFinancieroTarjetasCredito" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tiempoAcreditacionTarjetasCredito">Tiempo de Acreditación en Tarjetas de Crédito (dias): </label>  
  <div class="col-md-4">
  <input id="tiempoAcreditacionTarjetasCredito" name="tiempoAcreditacionTarjetasCredito" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="costoFinancieroTarjetasDebito">Costo Financiero en Tarjetas de Débito (%):</label>  
  <div class="col-md-4">
  <input id="costoFinancieroTarjetasDebito" name="costoFinancieroTarjetasDebito" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<button class="btn btn-success" type="submit">Enviar Decisiones</button>
</form>

</div>
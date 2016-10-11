<?php

    use yii\helpers\Url;

  ?>
<div class="container">
<h1 class="Titulo">Simulador de Negocios UDA</h1>
<legend>Ingresa al simulador o Registrate</legend>
 <form action="<?php echo Url::to(['site/validate']);?>" method="post" class="form-signin">
        <h2 class="form-signin-heading " style = "font-family: 'Lobster', cursive; color:white">Complete con Sus datos</h2>
        <label for="InputNombre" class="sr-only">Nombre</label>
        <input name="nombreUsuario" type="text" id="inputNombre" class="form-control" placeholder="Nombre" required>

		<label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="" required>
        <br>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        <a class="btn btn-lg btn-primary btn-block" href="<?php echo Url::to(['usuarios/index']);?>">Registrarse</a>

      </form>
        <br>
        <?php echo "$respuesta" ?>
</div> <!-- /container -->

<?php
	
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
?>

<div class="administracion-index container">

	<?php
		foreach ($shazam as $key => $value) {
			echo $key . ' = ' . $value;
			echo "<br>";
		}
	?>

</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/errores.js"></script>
	<script type="text/javascript">
		<?php
			include('conexion.php');

			$q="SELECT nom_tipus_bici FROM tipus_bici";
			$resultado = mysqli_query($conexion,$q);
		?>
	</script>
</head>
<body>

	<h1>Busqueda de bicicletas robadas1</h1>

	<form action="consultas.php">
		Tipus de bicicleta: <select name="tipus_bici">
			<?php
				
				if (mysqli_num_rows($resultado)>0) {
					//$num_productos = mysqli_num_rows($resultado);
					//echo "Productos encontrados: $num_productos <br/><br/>";

					while ($tipus_bici=mysqli_fetch_array($resultado)) {
						echo "<option name='" . $tipus_bici['nom_tipus_bici'] ."'>" . $tipus_bici['nom_tipus_bici'] . "<option>";
					}
				}				
			?>			
		</select><br>
		Marca: <input type="text" name="marca_bici"><br>
		Model: <input type="text" name="model_bici"><br>
		Color: <input type="text" name="color_bici"><br>
		Població: <input type="text" name="poblacio"><br>
		Data robatori: <input type="text" name="data_robatori"><br>
		<input id="enviar" type="submit" name="enviar" value="Enviar" onsubmit="formularioVacio()">
	</form>







</body>
</html>
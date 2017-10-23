<!DOCTYPE html>
<html lang="es-ES" prefix="og: http://ogp.me/ns#" class="no-js">

<head id="headerSection">
	<script type="text/javascript">
		<?php
			include('conexion.php');

			$q="SELECT nom_tipus_bici FROM tipus_bici";
			$resultado = mysqli_query($conexion,$q);
		?>
	</script>
</head>


<body class="page-template page-template-template-default page-template-template-default-php page page-id-110 group-blog wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
      
        <div class="content">

            	<!-- añadir formulario  -->

			<h1>Busqueda de bicicletas robadas</h1>

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
				<input id="enviar" type="submit" name="enviar" value="Buscar">
			</form>
		</div>
	</body>
</html>
<?php
	//ENLACE ENTRE DOCUMENTO PHP - CONEXION
	include('conexion.php');

	$q = "SELECT * FROM anunci WHERE ";
	$cont = 0;

	//COMPROBAR SI EXISTEN LOS DATOS ENVIADOS
	// if (isset($_REQUEST['tipus_bici'])!="") {
	// 	$tipus_bici = $_REQUEST['tipus_bici'];
	// 	$q = "SELECT * FROM anunci WHERE anu_tipus_bici LIKE '%$tipus_bici%'";
	// 	$consulta = mysqli_query($conexion,$q);
	// 	echo "$q <br>";
	// }

	if (($_REQUEST['marca_bici'])!="") {
		$marca_bici = $_REQUEST['marca_bici'];
		$cont++;

		if ($cont == 1) {
			$q = "$q" . "anu_marca = '$marca_bici' ";
		}else{
			$q = "$q" . "AND anu_marca = '$marca_bici' ";
		}
		echo "$q <br>";
		// $consulta = mysqli_query($conexion,$q);
	}

	if (($_REQUEST['model_bici'])!="") {
		$model_bici = $_REQUEST['model_bici'];
		$cont++;

		if ($cont == 1) {
			$q = "$q" . "anu_model LIKE '%$model_bici%' ";	
		}else{
			$q = "$q" . "AND anu_model LIKE '%$model_bici%' ";
		}
		
		echo "$q <br>";
		// $consulta = mysqli_query($conexion,$q);
	}

	if (($_REQUEST['color_bici'])!="") {
		$color_bici = $_REQUEST['color_bici'];
		$cont++;

		if ($cont == 1) {
			$q = "$q" . "anu_color LIKE '%$color_bici%' ";
		}else{
			$q = "$q" . "AND anu_color LIKE '%$color_bici%' ";
		}		
		echo "$q <br>";
		// $consulta = mysqli_query($conexion,$q);
	}

	// if (isset($_REQUEST['poblacio'])!="") {
	// 	$poblacio = $_REQUEST['poblacio'];
	// 	$q = "SELECT * FROM anunci WHERE XXX = '%$poblacio%'";
	// 	$consulta = mysqli_query($conexion,$q);
	// 	echo "$q <br>";
	// }

	$consulta = mysqli_query($conexion,$q);

	if(mysqli_num_rows($consulta)>0){
		$num_productos = mysqli_num_rows($consulta);
		echo "Productos encontrados: $num_productos <br/><br/>";

		while($producto=mysqli_fetch_array($consulta)){
			echo "<div style='border: 1px solid black; width: 300px; color: black;'>";
			/*echo "Tipus bici: $producto['anu_tipus_bici']<br>";*/
			echo "Marca: $producto[anu_marca]<br/>";
			echo "Model: $producto[anu_model]<br/>";
			echo "Color: $producto[anu_color]<br/>";
			echo "</div>";
		}

	// }else{
	// 	if ($cont == 0) {
	// 		function formularioVacio(){
	// 			alert("Vacio");
	// 		}
	// 	}else{
	// 		echo "No hay ningún producto que corresponda a esos datos!";	
	// 	}		
	// }

	}else{
		echo "No hay ningún producto que corresponda a esos datos!";
	}

	echo "<br>";
	echo "<a href='index.html'>Ir al formulario";

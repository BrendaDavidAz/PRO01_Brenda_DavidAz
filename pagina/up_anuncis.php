<?php

	//ENLACE ENTRE DOCUMENTO PHP - CONEXION
	include('conexion.php');

	$tipus_bici = $_REQUEST['tipus_bici'];
	$marca = $_REQUEST['marca'];
	$model = $_REQUEST['model'];
	$color = $_REQUEST['color'];
	$poblacio = $_REQUEST['poblacio'];

	try{
		
		//Enviar datos a la Base de datos
		$q = "INSERT INTO up_anunci (tipus_bici, marca_bici, model_bici, color_bici, poblacio) VALUES ('$tipus_bici', '$marca', '$model', '$color', '$poblacio')";
		$consulta = mysqli_query($conexion,$q);

	}catch (Exception $e) {

		echo "ERROR, no s'han pogut desar les dades <br><br>";
		echo "<a href='./subirAnuncio.php'>Volver a intentar</a><br>";
		echo "<a href=''>Buscar bicicletas robadas</a><br>";

	}if (! $e) {

		echo "Anunci publicat correctement! <br><br>";
		echo "<a href=''>Buscar bicicletas robadas</a><br>";
		echo "<a href=''>Subir anuncio</a><br>";
	}
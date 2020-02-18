<?php

require_once ("bd_conectar.php");
// $mas noombre= a variable
// Descripción de la consulta
$sql = "select * from peliculas";
//  Si queremos crear mas condiciones para que solo nos muestre esto de abajo
// $sql = "select * from peliculas where year=2001";
// Conexión a la base de datos según los datos de la función
$conexion = connectionDB();
// Resultado devuelto por la sentencia de base de datos
$resultado = mysqli_query($conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$datos = array();
// Si hay películas que coincidan con los criterios de  la consulta
// las leeremos con un bucle
if(mysqli_num_rows($resultado) != 0) {
	// leemos fila a fila la lista de registros
	while ($fila = mysqli_fetch_array( $resultado  )){
		// Convertimos cada registro a un array nombrado de php clave-valor
		$film = array(
			 "Id" => $fila["Id"],
			 "titol" => $fila["nombre"],
			 "sinopsi" => $fila["descripcion"],
			 "director" => $fila["director"],
			 "categoria" => $fila["categoria"],
			 "img" => $fila["img"],
			 "any" => $fila["year"],
			 "edad"=> $fila["edad"]
		);
		// Añadimos nueva película en el array general
		array_push($datos, $film);
	}
}


mysqli_close( $conexion );

// Generamos el contenido json a partir del array de datos
header('Content-Type: application/json');
$json = json_encode($datos);
print_r($json);

?>

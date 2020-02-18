<?php
// Primero tenemos que importar el archivo futbol.sql al mysql del xammp
	function connectionDB(){
		$HOST="localhost";
		$USER="root";
		$PASS="";
		$DB="servicios";
		$con = new mysqli( $HOST,$USER,$PASS, $DB) or die ("No se ha podido conectar al servidor de Base de datos");
		return $con;
	}

?>

<!-- // Obtenir una llista d'equips
	function getlistaservicios(){
		$connection = connectionDB();
		if ($connection->connect_error) {
			die("Connexió KO: " . $connection->connect_error);
		}
// AQui va la sentencia del codigo SQL
		// $sql = "SELECT id, nombre, descripcion, precio FROM servicio";
		$sql = "SELECT * FROM servicio";
		$resultado = $connection->query($sql);
		if ($resultado->num_rows > 0) {
			$dades = [];
			while($fila = $resultado->fetch_assoc()) {
				$servicio = array(
					 "id" => $fila["id"],
					 "img" => $fila["img"],
					 "nombre" => $fila["nombre"],
					 "categoria" => $fila["categoria"],
					 "descripcion" => $fila["descripcion"],
					 "precio" => $fila["precio"],
					 
				);
				array_push($dades, $servicio);
			}
			return $dades;
		} else {
			return false;
		}

		$conn->close();
    }
     -->
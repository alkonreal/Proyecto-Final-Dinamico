<?php
//conectar.php
function connectionDB(){
	// Siempre localhost
	$HOST="localhost";
	$USER="root";
	$PASS="";
	// cinema, es el nombre de la base de datos a la que nos queremos conectar
	$DB="cinema";
	$con = mysqli_connect( $HOST,$USER,$PASS ) or die ("No se ha podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $con, $DB ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	return $con;
}

?>

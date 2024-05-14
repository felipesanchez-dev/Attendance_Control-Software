<?php 
require "../admin/config/Conexion.php";
class Asistencia{


public function __construct(){

}



public function verificarcodigo_persona($codigo_persona){
 	$sql = "SELECT * FROM usuarios WHERE codigo_persona='$codigo_persona'";
	return ejecutarConsultaSimpleFila($sql);
}

public function seleccionarcodigo_persona($codigo_persona){
    $sql = "SELECT * FROM asistencia WHERE codigo_persona = '$codigo_persona'";
	return ejecutarConsulta($sql);
}

public function registrar_entrada($codigo_persona,$tipo){
	date_default_timezone_set('America/Bogota');
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");
    $sql = "INSERT INTO asistencia (codigo_persona,  tipo, fecha) VALUES ('$codigo_persona', '$tipo', '$fecha')";
	return ejecutarConsulta($sql);
}

public function registrar_salida($codigo_persona,$tipo){
	date_default_timezone_set('America/Lima');
	$fecha = date("Y-m-d");
	$hora = date("H:i:s");
 	$sql = "INSERT INTO asistencia (codigo_persona,  tipo, fecha) VALUES ('$codigo_persona', '$tipo', '$fecha')";
    return ejecutarConsulta($sql);
}



public function listar(){
	$sql="SELECT * FROM asistencia";
	return ejecutarConsulta($sql);
}


}

 ?>

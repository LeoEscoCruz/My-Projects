<?php
$host="localhost";
$user="root";
$password="";
$DB="formulario";

$conexion=@mysqli_connect($host, $user, $password) or die ("ERROR EN CONEXION: ".mysqli_connect_error());
mysqli_select_db($conexion,$DB) or die(mysqli_error($conexion));
    

?>
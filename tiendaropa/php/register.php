<?php

require($_SERVER['DOCUMENT_ROOT'] . "/tiendaropa/php/conexion.php");



$email=$_POST['email'];
$pass=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];


$sql = "INSERT INTO usuarios VALUES(null,'$email', '$pass','$confirm_pass')";
$result = mysqli_query($conexion, $sql);



echo $email . " " . $pass . " " . $confirm_pass . " ";

echo "Registro Correcto.";
?>
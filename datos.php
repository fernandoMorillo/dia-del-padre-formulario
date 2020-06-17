<?php
include 'conexion.php';

$name_apellido = $_POST['name_apellido'];
$email = $_POST['email'];
$celular =  $_POST['celular'];
$namefather = $_POST['namefather'];

$sql = "INSERT INTO marketing($name_apellido, $email, $celular, $namefather)VALUES('$name_apellido', '$email', '$celular', '$namefather')";

if(mysqli_query($con, $sql)){
    echo '<script>location.href="gracias.php"</script>';
}else{
    echo 'Error al guardar los datos';
}
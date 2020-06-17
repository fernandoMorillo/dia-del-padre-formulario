<?php
$host = '';
$user = '';
$pass = '';
$db = '';

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die ('error al conectar');
}

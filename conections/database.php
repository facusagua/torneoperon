<?php 
$server = "localhost";
$user = "laperon_peron";
$pass = "laperon@2016";
$dataBase = "laperon_peron";
$enlace = mysqli_connect($server, $user, $pass, $dataBase);
mysqli_select_db($enlace,$dataBase);
?>
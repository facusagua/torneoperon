<?php 
    include '../../conections/database.php';
    mysqli_select_db($enlace,$dataBase);
    $nombre = $_GET['nombre'];
    $codigo = $_GET['codigo'];
    $cate = $_GET['categoria'];
    $sexo = $_GET['sexo'];
    
    $insertTema = "INSERT INTO equipos (nom_eq,cod_eq,ccate_eq,genero_eq) VALUES ('$nombre','$codigo','$cate','$sexo')";
    $sqlTema = mysqli_query($enlace,$insertTema);
    $idTema = mysqli_insert_id($enlace);
    
header("Location: ../equipos.php");
?>
<?php
    //error_reporting(E_ERROR);
    include 'conections/database.php';
    mysqli_select_db($enlace,$dataBase);
    $service = $_GET['idJug'];
    mysqli_query($enlace, "INSERT INTO jugadoreseliminados SELECT * FROM jugadorres WHERE id_jug =".$service);
    mysqli_query($enlace, "DELETE FROM jugadorres WHERE id_jug=".$service);
    header('location:plantel.php');
    exit;
?>
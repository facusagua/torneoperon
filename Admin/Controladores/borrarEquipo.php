<?php 
include 'security.php';
//---------NO SE MODIFICA----------------------
    include '../../conections/database.php';
    mysqli_select_db($enlace,$dataBase);
//---------NO SE MODIFICA----------------------

//---------PASO 1 (Se reciben campos del formulario)----------------------
    $id_not = $_GET['idq'];
//---------Se reciben campos del formulario----------------------

//---------PASO 2 (Se realiza la consulta a base de datos)---------------
    
    $insertDB = "DELETE FROM equipos WHERE id_eq = '$id_not'";
    $sqlEq = mysqli_query($enlace,$insertDB);

//---------PASO 3 (Redirige a la pagina que se quiera volver)----------

header('Location: ../equipos.php');
?>
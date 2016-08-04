<?php
    include 'conections/database.php';
    mysqli_select_db($enlace,$dataBase);
    
    $code = $_POST['codigo'];
    $findEq = "select * from equipos WHERE cod_eq = '$code' ";
    $sqlEq = mysqli_query($enlace,$findEq);
    $row = mysqli_fetch_array($sqlEq, MYSQLI_ASSOC);
    $cantEq = mysqli_num_rows($sqlEq);
    if($cantEq != 0){
        $findCode = "select * from jugadorres j JOIN equipos e ON j.equipo_jug=e.id_eq WHERE e.cod_eq = '$code' ";
        $sqlCode = mysqli_query($enlace,$findCode);
        $cantCode = mysqli_num_rows($sqlCode);
        $result[]=$cantCode;
        $result[]=$row['nom_eq'];
        header("name-Type: application/x-json");
        echo json_encode($result); 
    }
    else{
        $cantEq = "-1";
        echo "$cantEq";
    }
    
?>
<?php
    include 'conections/database.php';
    mysqli_select_db($enlace,$dataBase);
    $userDni = $_GET['dniLogin'];
    $userPass = $_GET['passLogin'];

    $findUser = "select * from jugadorres where dni_jug = '$userDni' AND pass = '$userPass'";
    $sqlUser = mysqli_query($enlace,$findUser);
    $usuario = mysqli_fetch_assoc($sqlUser);
    $cantUser = mysqli_num_rows($sqlUser);
    if($cantUser > 0)
    {
        session_start();
        $_SESSION["usuario"] = $usuario['nom_jug']." ".$usuario['ape_jug'];
        $_SESSION["usuarioId"] = $usuario['id_jug'];
        $_SESSION["usuarioEquipo"] = $usuario['equipo_jug'];
        header("location:plantel.php");
    }
    else{
        header("location:loginFail.php");
    }
?>
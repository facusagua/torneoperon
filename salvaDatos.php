<?php
    include 'conections/database.php';
    mysqli_select_db($enlace,$dataBase); 
    $codeEq = $_POST['form-codigo'];
    $userPass = $_POST['form-pass'];
    $userName = $_POST['form-nombre'];
    $userApe = $_POST['form-ape'];
    $userDni = $_POST['form-dni'];
    $userEmail = $_POST['form-email'];
    $userOsoc = $_POST['form-osoc'];
    $userGsan = $_POST['form-gsang'];
    $userFnac = $_POST['form-fnac'];
    $findEq = "select id_eq,nom_eq from equipos WHERE cod_eq = '$codeEq' ";
    $sqlEq = mysqli_query($enlace,$findEq);
    $row = mysqli_fetch_array($sqlEq, MYSQLI_ASSOC);
    $nomEquip = $row["nom_eq"];
    $idEquip = $row["id_eq"];
    $insertUser = "INSERT INTO jugadorres (pass,nom_jug,ape_jug,dni_jug,email_jug,osoc_jug,gsang_jug,equipo_jug,fnac) VALUES ('$userPass','$userName','$userApe','$userDni','$userEmail','$userOsoc','$userGsan','$idEquip','$userFnac')";
    $sqlUser = mysqli_query($enlace,$insertUser);
    $idJug = mysqli_insert_id($enlace);
    $cantUser = "SELECT * FROM jugadorres WHERE equipo_jug = '$idEquip'";
    $sqlUser = mysqli_query($enlace,$cantUser);
    $cantlUser = mysqli_num_rows($sqlUser);

    if($cantlUser == 1)
    {
        $cantUser = "UPDATE equipos SET id_jug = '$idJug' WHERE id_eq = '$idEquip'";
        $sqlUser = mysqli_query($enlace,$cantUser);
    }
    
    if(isset($userEmail)) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "info@torneolaperon.com.ar";
    $email_subject = "Registro Torneo La Peron";
    $email_message = "Te has registrado correctamente al Torneo La Peron:\n\n";
    $email_message .= "Nombre: " .$userName. "\n";
    $email_message .= "Apellido: " .$userApe. "\n";
    $email_message .= "Dni: " .$userDni. "\n";
    $email_message .= "Contraseña: " .$userPass. "\n";

// Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email_to."\r\n".
    'Reply-To: '.$email_to."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($userEmail, $email_subject, $email_message, $headers);
    }
    header('Location:registroOK.php');
?>
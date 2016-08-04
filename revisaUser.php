<?php
    include 'conections/database.php';
    mysqli_select_db($enlace,$dataBase);
    $userDni = $_POST['dni'];
    $findUser = "select * from jugadorres where dni_jug = '$userDni'";
    $sqlUser = mysqli_query($enlace,$findUser);
    $cantUser = mysqli_num_rows($sqlUser); 
    echo $cantUser;
    
?>
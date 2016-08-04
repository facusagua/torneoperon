<?php 
@session_start();
session_unset();
session_destroy(); // destruyo la sesión 
header("Location:index.html"); //envío al usuario a la pag. de autenticación 
?>
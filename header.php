<?php 
error_reporting(E_ERROR);
session_start();
$sexo = $_GET['s'];
if($sexo == "F"){
    $_SESSION['sexo']= "f";
}
if($sexo == "M"){
    $_SESSION['sexo']= "m";
}
echo $userId = $_SESSION["usuarioId"];
include 'conections/database.php';
mysqli_select_db($enlace,$dataBase); 
$findEq = "select * from jugadorres WHERE id_jug = '$userId' ";
$sqlEq = mysqli_query($enlace,$findEq);
$row = mysqli_fetch_array($sqlEq);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>La Perón Futbol 5</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/themetypo.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/widget.css" rel="stylesheet">
    <link href="css/color<?php echo $_SESSION['sexo'];?>.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery-1.9.0.min.js"></script>
    <script src="js/base64.js"></script>
    <link rel="stylesheet" href="css/jquery.validity.css" />
    <script src="js/jquery.validity.js"></script>  
      <script type="text/javascript"> 
        $(document).ready(function() {
            debugger;
        $("#formulario").validity(function() {
            debugger;
                $("#form-codigo").require();
                $("#form-dni").require();
                $("#form-pass").require();
                $("#form-nombre").require();
                $("#form-ape").require();
                $("#form-fnac").require().match('date');
                $("#form-email").require().match('email');
                $("#form-osoc").require();
                $("#form-gsang").require();
            });
            
        $(':input', formulario).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            //limpiamos los valores de los campos…
            if (type == 'text' || type == 'password' || tag == 'number')
                this.value = "";
        });    
        
        $(".btnIndex").click(function(){
            debugger;
               $("#modalWin").click();
               $("#mensajeModal").html("Seccion en construccion");
        });    
            
		$("#form-dni").focusout(function(){
        debugger;
        var user = 'dni='+$(this).val();
		var url = "revisaUser.php"; // El script a dónde se realizará la petición.
		$.ajax({
           type: "POST",
           url: url,
           data: user,
           dataType: "html",
           error: function(){
            alert("error petición ajax");
           },
           success: function(data)
           {    debugger;
            //var valor = data.responseText;
            if(data != 0)
                {
               $("#modalWin").click();
               $("#mensajeModal").html("El dni ya fue registrado.-");
               $("#form-dni").val("");    
                }
            }
         });
        });        
             $("#form-ape").keyup(function() {
 $(this).val().toLowerCase();
});      
        $("#form-codigo").focusout(function(){
        debugger;
        var code = 'codigo='+$(this).val();
		var url = "revisaCupo.php"; // El script a dónde se realizará la petición.
		$.ajax({
           type: "POST",
           url: url,
           data: code,
           dataType: "html",
           error: function(){
            alert("error petición ajax");
           },
           success: function(data)
           {    debugger;
            console.log(data);
            var json = $.parseJSON(data);
            $(json).each(function(i,val){
            if(i==1){
                $("#equipoNom").html(val);
            }
            });
            if(data ==  -1)
                {
                $("#modalWin").click();
                $("#mensajeModal").html("Codigo de equipo inválido. No existe en base de datos.-");
                $("#form-codigo").val("");  
                }
            if(data >= 15)
                {
               $("#modalWin").click();
               $("#mensajeModal").html("Su equipo ya completo el cupo de jugadores registrados. No podrá registrarse");
               $("#form-codigo").val("");    
                }
            }
         });
    });
            

 });
</script>
  </head>
  <body>
    
     <!--// Wrapper //-->
    <div class="kode-wrapper">
       <header id="mainheader" class="kode-header-absolute">

        <!--// TopBaar //-->
          <div class="kode-topbar">
		  <div class="container">
              <div class="row">
                <div class="col-md-6 kode_bg_white">
				</div>
                <div class="col-md-6">
                  <ul class="kode-userinfo">
                    <?php if(isset($_SESSION["usuario"])){ ?>
                      <li><a href="plantel.php"><i class="fa fa-user"></i> Mi Equipo</a></li>
                      <a href="#" data-toggle="modal" data-target="#perfilJugador"><li style="color:white;">
                    <i class="fa fa-sign-in"></i> <?php echo $_SESSION["usuario"]; ?></li></a>
                    <?php }else{ ?>
                      <li><a href="#" data-toggle="modal" data-target="#loginUsuarios"><i class="fa fa-sign-in"></i> Login</a></li>
                    <?php } ?>  
                    <li><a href="#" data-toggle="modal" data-target="#myModalTwo"><i class="fa fa-user-plus"></i><?php if($_SESSION['sexo'] == "f"){ echo "Registro de Jugadoras";}else{echo "Registro de Jugadores";} ?> </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!--// TopBaar //-->
		
		<div class="header-8">
			<div class="container">
				<!--NAVIGATION START-->
				<div class="kode-navigation pull-left">
					<ul>
						 <li><a href="index.html">Nosotros</a>
                         <li><a href="index.html">Premios</a>	
                         <li><a href="index.html">Campeones</a>	
                         <li><a href="Reglamento - Torneo Final 2016<?php echo $_SESSION['sexo'];?>.pdf" target="_blank">Reglamento</a>	
					</ul>
				</div>
				<!--NAVIGATION END--> 
				<!--LOGO START-->	
				<div class="logo">
					<a href="indexo.php" class="logo"><img src="images/logo<?php echo $_SESSION['sexo'];?>.png" height="100px" style="margin-left:20px;margin-top:-10px;" alt=""></a>
				</div>
                <div class="kode-navigation block-center">
					<ul>
						 <li><a href="index.html">Nuestra Tienda</a>
                         <li><a href="index.html">La Peron Tv</a>	
                         <li><a href="index.html">Contacto</a>	
					</ul>
				</div>
				<!--LOGO END-->	
			
				<!--NAVIGATION END-->  
				 <nav class="navbar navbar-default">
                    
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Nosotros</a></li>
						                <li><a href="#">Premios</a></li>
                            <li><a href="#">Campeones</a></li>
                            <li><a href="Reglamento - Torneo Final 2016<?php echo $_SESSION['sexo'];?>.pdf" target="_blank">Reglamento</a></li>
                            <li><a href="#">Tienda</a></li>
                            <li><a href="#">Peron Tv</a></li>
                        </ul>
                      </div><!-- /.navbar-collapse -->

                  </nav>
			</div>
		</div>
      </header>
	  <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="perfilJugador" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Perfil Jugador </h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" action="#" enctype="multipart/form-data"  method="POST">
              <div class="row"><div class="col-md-6">
                <p><span>Nombre: <?php echo $_SESSION['usuario']; ?></span> </p>
                <p><span>Dni: <?php echo $row['dni_jug']; ?> </span></p>    
              </div></div>
              <div class="row"><div class="col-md-6">
                <p><span>Email: <?php echo $row['email_jug']; ?></span> </p>
                <p><span>Obra Social: <?php echo $row['osoc_jug']; ?></span></p>    
              </div></div>
             <div class="row"><div class="col-md-6">
                <p><span>Grupo Sanguineo: <?php echo $row['gsang_jug']; ?></span> </p>
                <p><span>Fecha Nacimiento:<?php echo $row['fnac']; ?></span></p>    
              </div></div>      
                <p class="kode-submit">
                <a href="certificadomedico.pdf" target="_blank">
                  <input class="thbg-colortwo" value="Descargar ">
                </a>
                <a href="cerrarsesion.php">
                  <input class="thbg-colortwo" value="Cerrar Cesion">
                </a>
                </p>
            </form>
          </div>
        </div>
      </div>
    </div>
      <div class="kode-subheader subheader-height">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <!--// SubHeader //-->
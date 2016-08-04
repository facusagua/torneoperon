<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Torneo La Peron</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		
        <script type="text/javascript"> 
        $( document ).ready(function() {
        
        $(':input', formulario).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            //limpiamos los valores de los campos…
            if (type == 'text' || type == 'password' || tag == 'number')
                this.value = "";
        });    
            
		$("#form-usuario").focusout(function(){
        debugger;
        var user = 'username='+$(this).val();
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
            if(data > 0)
                {
               $("#modalWin").click();
               $("#mensajeModal").html("El nombre de usuario no se encuentra disponible");
               $("#form-usuario").val("");    
                }
            }
         });
     
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
            
$("#form-ape").keyup(function() {
 $(this).val().toLowerCase();
});
 });
</script>

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Buscanos por las redes sociales:
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-12 form-box">
                        	<div class="form-top">
							<div class="col-sm-4 col-md-4 form-box">
								<img src="assets/img/logolaperon.png" width="150px" style="margin-top:15px;">
							</div>
							<div class="col-sm-4 col-md-4 form-box">
								<div class="form-top-center">
                        			<h3 class="text-center">La inscripcion esta cerrada</h3>
                            		<a href="assets/certificado%20medico.pdf" id="fichamedica" target="_blank">  <p class="text-center"> Descargar el certificado médico</p> </a>
                                    <div id="mensaje"></div>
                        		</div>
							</div>
							<div class="col-sm-4 col-md-4">
								<img class="pull-right" src="assets/img/logolaperon.png" width="150px"  style="margin-top:15px;">
							</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="assets/certificado%20medico.pdf" style= "display:none;" id="fichamedica" target="_blank">sdfsdfdsf</a>
        </div>
        <button id="modalWin" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display:none;"></button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Error</h4>
                            </div>
                        <div id="mensajeModal" class="modal-body">
                    </div>
      </div>
    </div>
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
      <div class="kode-bottom-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>©2016 LA PERON. All Right Reserved</p>
            </div>
            <div class="col-md-6">
              <a href="#" id="kode-topbtn" class="thbg-colortwo"><i class="fa fa-angle-up"></i></a>
            </div>
          </div>
        </div>      </div>
<div class="clearfix clear"></div>
    </div>
    <!--// Wrapper //-->
    <!-- Modal -->
    <div class="modal fade" id="loginUsuarios" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login de Usuarios </h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" action="revisaLogin.php" method="get">
              <p><span>Dni:</span> <input id="dniLogin" name="dniLogin" type="text" placeholder="Ingrese Dni"></p>
              <p><span>Password:</span> <input id="passLogin" name="passLogin"  type="password" placeholder="Ingrese Password"></p>
              <p class="kode-submit"><input class="thbg-colortwo" type="submit" value="Sign in"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- Modal -->
    <div class="modal fade" id="perfilJugador" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Perfil Jugador </h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" method="get">
              <p><span>Nombre: <?php echo $_SESSION["usuario"]; ?></span></p>
              <p><span>Dni: <?php echo $row["dni_jug"]; ?></span> </p>
              <p><span>Email: <?php echo $row["email_jug"]; ?></span> </p>
              <p><span>Obra Social: <?php echo $row["osoc_jug"]; ?></span> </p>
              <p><span>Grupo Sanguineo: <?php echo $row["gsang_jug"]; ?></span> </p>
              <p><span>Fecha Nacimiento: <?php echo $row["fnac"]; ?></span> </p>    
              <p class="kode-submit"><a href="certificadomedico.pdf" target="_blank"><input class="thbg-colortwo" type="button" value="Descargar Certificado"></a><a href="cerrarsesion.php">  <input class="thbg-colortwo" type="button" value="Cerrar Sesion"></a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- Modal -->
    <div class="modal fade" id="editEquipo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar Equipo </h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" action="revisaLogin.php" enctype="multipart/form-data" method="POST">
              <p><span>Descripcion:</span> <input id="passLogin" name="descEq"  type="text" placeholder="Descripcion" required></p>
            <p><span>Escudo:</span> <input id="dniLogin" name="escEq" type="file" placeholder="Escudo del equipo" required></p>    
              <p class="kode-submit"><input class="thbg-colortwo" type="submit" value="Modificar Perfil"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModalTwo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Completa todos tus datos</h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" role="form" action="salvaDatos.php" method="post" id="formulario">
              <div class="form-group col-md-12 col-xs-12">
             <h2 id="equipoNom"></h2>      
			 <input type="text" name="form-codigo" placeholder="Codigo de Equipo..." class="form-codigo form-control" id="form-codigo">
                </div>
                <br>
                <div class="form-group col-md-6 col-xs-12">
			         <input type="text" pattern="[0-9]{8}" name="form-dni" placeholder="DNI (solo números)" class="form-dni form-control" id="form-dni">
			     </div>
				<div class="form-group col-md-6 col-xs-12">
			         <label class="sr-only" for="form-pass">pass</label>
			         <input type="password" name="form-pass" placeholder="Contraseña..." class="form-pass form-control" id="form-pass">
			    </div>
                <div class="form-group col-md-6 col-xs-12">
			         <input type="text" name="form-nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre..." class="form-ape form-control" id="form-nombre" >
			    </div>
				<div class="form-group col-md-6 col-xs-12">
                    <input type="text" name="form-ape" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Apellido..." class="form-ape form-control uper" id="form-ape" >
			     </div>
				 
                 <div class="form-group col-md-6 col-xs-12">
                     <input type="text" name="form-fnac" placeholder="Fecha de Nacimiento"  onfocus="(this.type='date')" class="form-fnac form-control" id="form-fnac" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required >
			      </div>
				  <div class="form-group col-md-6 col-xs-12">
			         <input type="email" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email" required>
			      </div>
				  <div class="form-group col-md-6 col-xs-12">
			         <input type="text" name="form-osoc" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Obra Social..." class="form-ape form-control" id="form-osoc" >
			       </div>
                   <div class="form-group col-md-6 col-xs-12">
                        <select name="form-gsang" class="form-ape form-control" id="form-gsang" >
                        <option value="">Grupo Sanguíneo</option>
                        <option value="0-">0 -</option>
                        <option value="0+">0 +</option>
                        <option value="A-">A -</option>
                        <option value="A+">A +</option>
                        <option value="B-">B -</option>
                        <option value="B+">B +</option>
                        <option value="AB-">AB -</option>
                        <option value="AB+">AB +</option>
                       </select>                 
                    </div>
              <p class="kode-submit"><a href="#"></a> <input class="thbg-colortwo" type="submit" value="Registrarme"></p>
            </form>
          </div>
        </div>
      </div>
        
    </div>
<button id="modalWin" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" style="display:none;"></button>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    
                        <div id="mensajeModal" class="modal-body">
                    </div>
      </div>
    </div>
        </div>
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validity.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>  
    <script src="js/waypoints-min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/bootstrap-progressbar.js"></script>
	<script src="js/jquery.accordion.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/jquery.prettyphoto.js"></script>
	<script src="js/kode_pp.js"></script>
    <script src="js/functions.js"></script>

  </body>
</html>
<?php 
session_start();
include "header.php";
include 'conections/database.php';
$equipo = $_SESSION["usuarioEquipo"];
$_SESSION["usuarioId"];
$sqlProductos = "SELECT * FROM equipos Where id_eq = '$equipo'";
$query = mysqli_query($enlace,$sqlProductos) or die(mysql_error());
$producto = mysqli_fetch_assoc($query);
$producto['id_jug'];
$sqlJugadores = "SELECT * FROM jugadorres Where equipo_jug = '$equipo'";
$queryJug = mysqli_query($enlace,$sqlJugadores) or die(mysql_error());
$jugadores = mysqli_fetch_assoc($queryJug);
?>
<!--// Main Content //-->
      <div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection">
          <div class="container">
            <div class="row">

                <div class="kode-pagecontent col-md-9">
                <div class="row">    
                 <div class="col-md-2"><a href="#" class="kode-player-thumb"><img src="images/escudos/<?php echo $producto['escudo']; ?>" alt=""></a></div>
                 <div class="col-md-10">
                   <div class="kode-detail-element">
                        <h2><?php echo $producto['nom_eq']." ( ".$producto['ccate_eq']." )"; ?></h2>
                       <?php if($producto['id_jug'] == $_SESSION["usuarioId"]){  ?>
                           <h4><a href="#" data-toggle="modal" data-target="#editEquipo" class="custom-btn">Editar Equipo</a></h4>
                          <?php } ?>  
                        <ul class="kode-team-network">
                          <li><a class="fa fa-facebook" href="#"></a></li>
                          <li><a class="fa fa-twitter" href="#"></a></li>  
                        </ul>
                </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <p style="font-size:18px"><?php echo $producto['descripcion']; ?></p>
                    </div>
                  </div>
						
				  <div class="kode-section-title"> <h2>Jugadores</h2> </div>
				 <div class="team-detail-table-ap padding-bottom-30-flat">
                        <table class="kode-table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Goles</th>
                              <th>Amarillas</th>
                              <th>Azules</th>
                              <th>Rojas</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php do{ ?>
                            <tr>
                              <td><?php echo $jugadores['nom_jug']." ".$jugadores['ape_jug']; ?><?php if($producto['id_jug'] == $_SESSION["usuarioId"]){  ?> <a href="delJug.php?idJug=<?php echo $jugadores['id_jug']; ?>" style="color:white;">   (eliminar)</a><?php } ?></td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                             <?php }WHILE($jugadores = mysqli_fetch_assoc($queryJug)) ?> 
                          </tbody>
                       </table>
                     </div>
                  <div id="koderespond">
                      <div class="kode-section-title"> <h2>Mandale tu aliento al equipo</h2> </div>
                      <form>
                        <p><input type="text" placeholder="Nombre *"></p>
                        <p><input type="text" placeholder="Telefono *"></p>
                        <p><input type="text" placeholder="Email *"></p>
                        <p class="kd-textarea"><textarea placeholder="Tu comentario"></textarea></p>
                        <p class="kd-button"><input type="button" value="Enviar Saludo" class="thbg-color"></p>
                      </form>
                  </div>

                </div>

                <aside class="kode-pagesidebar col-md-3">
                  <div class="widget tab-widget">
                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">GANO</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">EMP</a></li>
                      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">PERD</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                        <ul class="match-widget">
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                        <ul class="match-widget">
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="messages">
                        <ul class="match-widget">
                         
                        </ul>
                      </div>
                    </div>

                    </div>

                  
                </aside>

              </div>
            </div>
        </section>
        <!--// Page Content //-->
<!-- Modal -->
    <div class="modal fade" id="editEquipo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar Equipo </h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" action="procesarArchivos.php" enctype="multipart/form-data"  method="POST">
              <p><span>Descripcion:</span> <input name="descEq"  type="text" placeholder="Descripcion" value="<?php echo $producto['descripcion']; ?>" required></p>
            <p><span>Escudo:</span> <input name="escEq" type="file" placeholder="Escudo del equipo" value="<?php echo $producto['escudo']; ?>" required></p>    
              <p class="kode-submit"><input class="thbg-colortwo" type="submit" value="Modificar Perfil"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>
      <!--// Main Content //-->
<?php 
include "footer.php";
?>
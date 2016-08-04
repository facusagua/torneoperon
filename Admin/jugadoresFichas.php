<?php 
    include 'header.php';
    include '../conections/database.php';
    $idEq = $_GET['idq'];
    mysqli_select_db($enlace,$dataBase); 
    $findJu = "select * from jugadorres where equipo_jug = '$idEq'";
    $sqlJu = mysqli_query($enlace,$findJu);
    $row = mysqli_fetch_array($sqlJu, MYSQLI_ASSOC);
?>  
<!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Jugadores</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Ir!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">

                                    <div class="row">
                                    <?php do{ ?>
                                        <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDown">
                                            <div class="well profile_view">
                                                <div class="col-sm-12">
                                                    <h4 class="brief"><i>Ficha Personal</i></h4>
                                                    <div class="left col-xs-7">
                                                        <h2><?php echo $row["nom_jug"]." ".$row["ape_jug"]; ?></h2>
                                                        <p><strong>DNI: </strong> <?php echo $row["dni_jug"]; ?> </p>
                                                        <ul class="list-unstyled">
                                                            <li> F.Nac: <?php echo $row["fnac"]; ?> </li>
                                                            <li> Email: <?php echo $row["email_jug"]; ?></li>
                                                            <li> O. Social: <?php echo $row["osoc_jug"]; ?> </li>
                                                            <li> Sangre: <?php echo $row["gsang_jug"]; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="right col-xs-5 text-center">
                                                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      <?php }while($row = mysqli_fetch_array($sqlJu, MYSQLI_ASSOC)) ?>   
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <?php 
    include 'footer.php';
?>
<?php 
    include 'header.php';
    include '../conections/database.php';
    mysqli_select_db($enlace,$dataBase); 
    $findEq = "select * from equipos";
    $sqlEq = mysqli_query($enlace,$findEq);
    $row = mysqli_fetch_array($sqlEq, MYSQLI_ASSOC);
    $nomEquip = $row["nom_eq"];
    $idEquip = $row["id_eq"];
?>
<!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Equipos</h3>
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
                                <div class="x_title">
                                    <h2>Listado</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="nuevoEquipo.php"><button class="btn btn-default" type="button">Nuevo Equipo</button></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <!-- start project list -->
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th style="width: 20%">Equipo</th>
                                                <th>Código</th>
                                                <th>Categoría</th>
                                                <th>Género</th>
                                                <th>Porcentaje de jugadores</th>
                                                <th style="width: 20%">#Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php do{
                                            $ideq = $row["id_eq"];
                                            $findJu = "select * from jugadorres where equipo_jug = '$ideq'";
                                            $sqlJu = mysqli_query($enlace,$findJu);
                                            $cantJu = mysqli_num_rows($sqlJu);
                                            $porcJug = ($cantJu*100)/15;
                                            ?>    
                                            <tr>
                                                <td><?php echo $row["id_eq"]; ?></td>
                                                <td>
                                                    <a><?php echo $row["nom_eq"]; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $row["cod_eq"]; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $row["ccate_eq"]; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $row["genero_eq"]; ?></a>
                                                </td>
                                                <td class="project_progress">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $porcJug; ?>"></div>
                                                    </div>
                                                    <small><?php echo round($porcJug); ?>% Completo</small>
                                                </td>
                                                <td>
                                                    <a href="jugadoresFichas.php?idq=<?php echo $row["id_eq"]; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                                                    <a href="Controladores/editarNota.php?idq=<?php echo $row["id_eq"]; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                                    <a href="Controladores/borrarEquipo.php?idq=<?php echo $row["id_eq"]; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Del </a>
                                                </td>
                                            </tr>
                                            <?php }while($row = mysqli_fetch_array($sqlEq, MYSQLI_ASSOC)) ?>  
                                        </tbody>
                                    </table>
                                    <!-- end project list -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php 
    include 'footer.php';
?>
<?php 
    include 'header.php';
    include '../conections/database.php';
    $id_not= $_GET['id_Not'];
    mysqli_select_db($enlace,$dataBase);
    //----------Categorias-------------------------
    $findMas = "select * from equipos WHERE id_eq='$id_not'";
    $sqlMas = mysqli_query($enlace,$findMas);
    $rowMas = mysqli_fetch_array($sqlMas, MYSQLI_ASSOC);
?>

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Equipos</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Editar Equipo</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="Controladores/editarNota.php" class="form-horizontal form-label-left" method="GET">
                                                <div class="form-group col-md-6 ">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nombre 
                                                    </label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input type="text" id="first-name" name="nTitulo" required="required" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $rowMas['nom_eq'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Codigo 
                                                    </label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input type="text" id="last-name" name="nDescripcion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $rowMas['cod_equipo'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Tema</label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <datalist id="temas">
                                                            <?php do{ 
                                                                echo '<option>'.$rowTema['tema_descripcion']."</option>";
                                                             }while( $rowTema = mysqli_fetch_array($sqlTema, MYSQLI_ASSOC));
                                                            ?>
                                                        </datalist>
                                                        <input id="middle-name" list="temas" class="form-control col-md-7 col-xs-12" type="text" name="nTema" required="required" value="<?php echo $rowTemaN['tema_descripcion'] ?>">
                                                    </div>
                                                </div>
                                                 <div class="form-group col-md-6">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">Categorías</label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12" >
                                                 
                                                        <select class="select2_multiple form-control" name="nCategorias[]" multiple="multiple" required="required">
                                                            <?php do{ 
                                                                echo '<option value="'.$rowCatN['id_cat'].'" selected>'.$rowCatN['cat_nombre']."</option>";
                                                             }while( $rowCatN = mysqli_fetch_array($sqlCatN, MYSQLI_ASSOC));
                                                            ?>
                                                            <?php do{ 
                                                                echo '<option value="'.$rowCat['id_cat'].'">'.$rowCat['cat_nombre']."</option>";
                                                             }while( $rowCat = mysqli_fetch_array($sqlCat, MYSQLI_ASSOC));
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                        
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Noticia</h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <textarea name="nTexto" value="<?php echo $rowMas['not_publicacion'] ?>"></textarea>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="control-group col-md-12">
                                            <label class="control-label col-md-1 col-sm-3 col-xs-12">Etiquetas</label>
                                            <div class="col-md-11 col-sm-9 col-xs-12">
                                                <input id="tags_1" type="text" name="nTags" class="tags form-control" value="<?php echo $rowMas['not_tags'] ?>"/>
                                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                                    <label for="middle-name" class="control-label col-md-1 col-sm-3 col-xs-12">Videos: </label>
                                                    <div class="col-md-11 col-sm-6 col-xs-12">
                                                    <?php do{
                                                        echo "<div class='col-md-6 col-sm-6 col-xs-12'><h4 >".$rowVid['url']." <a href='Controladores/borrarVideo.php?id_Vid=".$rowVid['id_vid']."&& id_no=".$id_not."'><i class='fa fa-times-circle'></i></a></h4></div>";
                                                    }while( $rowVid = mysqli_fetch_array($sqlVid, MYSQLI_ASSOC));
                                                    ?>
                                                    </div>
                                        </div>
                                        <p>*Debera insertar sólo los códigos de videos de youtube ej: https://www.youtube.com/watch?v=K_ZWc5nBWys ---> poner solo: K_ZWc5nBWys en los campos de abajo.-</p>
                                                <div class="form-group col-md-6">
                                                    <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Url Video</label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nVideoU" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Url Video</label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nVideoD" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Url Video</label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nVideoT" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Url Video</label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nVideoC" >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12  ">
                                                        <input class="pull-right" type="submit" value="GUARDAR PUBLICACION">
                                                    </div>    
                                                </div>
                                        <input type="hidden" name="id_not" value="<?php echo $id_not;?>">
                                            </form>
                                    </div>
                                    <!-- End SmartWizard Content -->
                            </div>
                            </div>
                        </div>

                    </div>
                </div>

            <!-- /page content -->

<?php 
    include 'footer.php';
?>
<?php 
    include 'header.php';
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
                                    <h2>Nueva Equipo</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form action="Controladores/insertarNota.php" class="form-horizontal form-label-left" method="GET">
                                                <div class="form-group col-md-6 ">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nombre 
                                                    </label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input type="text" id="first-name" name="nombre" required="required" class="form-control col-md-7 col-xs-12" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Codigo 
                                                    </label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <input type="text" id="last-name" name="codigo" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Categoria 
                                                    </label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <select type="text" id="last-name" name="categoria" required="required" class="form-control col-md-7 col-xs-12">
                                                            <option value="" selected>Seleccione Categoria</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Sexo
                                                    </label>
                                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                                        <select type="text" id="last-name" name="sexo" required="required" class="form-control col-md-7 col-xs-12">
                                                            <option value="" selected>Seleccione Sexo</option>
                                                            <option value="F">Femenino</option>
                                                            <option value="M">Masculino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12  ">
                                                        <input class="pull-right" type="submit" value="GUARDAR PUBLICACION">
                                                    </div>    
                                                </div>
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
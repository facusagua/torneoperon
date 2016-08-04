<?php 
include "header.php";
error_reporting(E_ERROR);
session_start();
?>
      <div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection">
          <div class="container">
              <div class="kode-detail-element">
                <h2>Categorias y Zonas</h2>
              </div>
            <?php if($_SESSION['sexo']== "m"){ ?>
              <div class="row">
                <div class="kode-pagecontent col-md-12">
                    
                  <div class="kode-player-tabs">
                    <!-- Nav tabs -->
                    <ul class="player-nav" role="tablist">
                      <li role="presentation" class="active"><a href="#hometwo" aria-controls="hometwo" role="tab" data-toggle="tab">Categoria A</a></li>
                      <li role="presentation"><a href="#profiletwo" aria-controls="profiletwo" role="tab" data-toggle="tab">Categoria B</a></li>  
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="hometwo">
                        <table class="kode-table">
                          <thead>
                            <tr>
                              <th>Zona A</th>
                              <th>Zona B</th>
                              <th>Zona C</th>
                              <th>Zona D</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>LA CAÑADA F5</td>
                              <td>GAYIYO FC</td>
                              <td>PURA QUIMICA</td>
                              <td>LOS GORDEROS FC</td>
                            </tr>
                            <tr>
                              <td>HACHA Y PIZA</td>
                              <td>MERCANTIL FAE</td>
                              <td>CANARIOS DE YB</td>
                              <td>FRANCO CANADIENSE</td>
                            </tr>
                            <tr>
                              <td>BARA F.C.</td>
                              <td>MANDARINA MECANICA</td>
                              <td>CRACKYS F.C.</td>
                              <td>ROMAS JRS.</td>
                            </tr>
                            <tr>
                              <td>TORREON F.C.</td>
                              <td>LA MISMIÑA</td>
                              <td>ASADO DE ACHURA</td>
                              <td>CERVECEROS</td>
                            </tr>
                            <tr>
                              <td>CERO POSITIVO</td>
                              <td>YACANSAN</td>
                              <td>CACHOROS</td>
                              <td>NIUPI</td>
                            </tr>
                            <tr>
                              <td>LOS ICARDOS F5</td>
                              <td>CLUB ATLETICO NAPOLI</td>
                              <td>LA M214</td>
                              <td>SPARTA PLAGAS</td>
                            </tr>
                            <tr>
                              <td>ANIMALES SUELTOS</td>
                              <td>AÑATUYA</td>
                              <td>EL REJUNTE</td>
                              <td>MALA JUNTA</td>
                            </tr>
                            <tr>
                              <td>REAL COLICOS</td>
                              <td>DROOPY</td>
                              <td>TARASCA</td>
                              <td>SPORTING BALBOA</td>
                            </tr>
                            <tr>
                              <td>LOS BOCHAS</td>
                              <td>EL GUEMES F.C.</td>
                              <td>REFISURA</td>
                              <td>LOS CUMPAS</td>
                            </tr>
                            <tr>
                              <td>EL BAYERN</td>
                              <td>LA 25 ROCK & FOOTBALL</td>
                              <td>LOS PIBES DE LA QUINTA</td>
                              <td>DIABETEAM</td>
                            </tr>  
                              
                          </tbody>
                       </table>
                      </div>
                    <div role="tabpanel" class="tab-pane" id="profiletwo">
                        <table class="kode-table">
                          <thead>
                            <tr>
                              <th>Zona A</th>
                              <th>Zona B</th>
                              <th>Zona C</th>
                              <th>Zona D</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>BELGRANO F.C.</td>
                              <td>LA RESERVA</td>
                              <td>LA FUSION</td>
                              <td>LA LEGIÓN</td>
                            </tr>
                            <tr>
                              <td>CERRO SAN JAVIER</td>
                              <td>LA MORENA F.C.</td>
                              <td>CORPO 360</td>
                              <td>EL CAMIÓN DE GERMAN</td>
                            </tr>
                            <tr>
                              <td>TOTINHAM F.C.</td>
                              <td>SASSI UNITED</td>
                              <td>METIENDO CAÑO</td>
                              <td>PASO A PASO F.C.</td>
                            </tr>
                            <tr>
                              <td>ESPARTA GYM</td>
                              <td>MASCHE TEAM</td>
                              <td>CUECA F.C.</td>
                              <td>TIBURONES F.C.</td>
                            </tr>
                            <tr>
                              <td>CARRUSEL</td>
                              <td>PD TEAM</td>
                              <td>C.D. SACACORCHO</td>
                              <td>5CODIGOS</td>
                            </tr>
                            <tr>
                              <td>TULIO B</td>
                              <td>ASTON BIRRA</td>
                              <td>IRLANDES F.C.</td>
                              <td>YESTERDAY TEAM</td>
                            </tr>
                            <tr>
                              <td>FRENAHAYBACHE F.C.</td>
                              <td>LA CHAMPETA F.C.</td>
                              <td>LOS BORBOTONES</td>
                              <td>BODEGUEROS</td>
                            </tr>
                            <tr>
                              <td>DREAM TEAM</td>
                              <td>KIRICCOCHO F.C.</td>
                              <td>LA MASIA</td>
                              <td>PURA BIRRA</td>
                            </tr>
                            <tr>
                              <td>SPORTING PEPE</td>
                              <td>TOCO LA PONGO Y ME VOY</td>
                              <td>CARGADERO F.C.</td>
                              <td>SUPER XV</td>
                            </tr>
                            <tr>
                              <td>POCA SODA</td>
                              <td>LBQ</td>
                              <td>LA CMC</td>
                              <td>SAN MARTIN</td>
                            </tr>  
                              
                          </tbody>
                       </table>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
              <section class="kode-pagesidebar col-md-12 col-xs-6">
                <div class="container">
                    <div class="kode-detail-element">
                        <h2>Fixture</h2>
                        <h4>Categoria A</h4>
                    </div>
                  <div class="widget tab-widget">

                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Zona A</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zona B</a></li>
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Zona C</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zona D</a></li>    
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">     
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                      </div>
                      <div role="tabpanel" class="tab-pane" id="messages">
                      </div>
                    </div>
               </div></div>
                </section>
              <section class="kode-pagesidebar col-md-12 col-xs-6">
                <div class="container">
                    <div class="kode-detail-element">
                        <h2>Fixture</h2>
                        <h4>Categoria B</h4>
                    </div>
                  <div class="widget tab-widget">

                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                       <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Zona A</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zona B</a></li>
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Zona C</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zona D</a></li> 
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">     
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                      </div>
                      <div role="tabpanel" class="tab-pane" id="messages">
                      </div>
                    </div>
               </div></div>
                </section>
              <?php } if($_SESSION['sexo']== "f"){ ?>
              <div class="row">

                <div class="kode-pagecontent col-md-12 col-xs-6">
                  <div class="kode-player-tabs">
                    <!-- Nav tabs -->
                    <ul class="player-nav" role="tablist">
                      <li role="presentation" class="active"><a href="#hometwoS" aria-controls="hometwo" role="tab" data-toggle="tab">Categoria A</a></li>
                      <li role="presentation"><a href="#profiletwoS" aria-controls="profiletwo" role="tab" data-toggle="tab">Categoria B</a></li>  
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="hometwoS">
                        <table class="kode-table">
                          <thead>
                            <tr>
                              <th>Zona A</th>
                              <th>Zona B</th>  
                             </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>BOTINERAS</td>
                              <td>BRANCA F.C.</td>
                            </tr>
                            <tr>
                              <td>EL PORTICO</td>
                              <td>QEEN F.C.</td>
                            </tr>
                            <tr>
                              <td>ANGRY GIRLS</td>
                              <td>ST 1</td>
                            </tr>
                            <tr>
                              <td>GOL'E</td>
                              <td>LAS PRO</td>
                             
                            </tr>
                            <tr>
                              <td>TANINDIAS</td>
                              <td>TURBINAS F.C.</td>
                              
                            </tr>
                            <tr>
                              <td>WACHIS</td>
                              <td>LAS BEAUTY</td>
                              
                            </tr>
                            <tr>
                              <td>PANTERAS</td>
                              <td>HERCULONAS F.C.</td>
                              
                            </tr>
                            <tr>
                              <td>TOPADORAS</td>
                              <td>COMARCA F.C.</td>
                            </tr>
                            <tr>
                              <td>ROMPEPELOTAS</td>
                              <td>URRACAS</td>
                            </tr>
                            <tr>
                              <td>FU3RA D3 FOCO</td>
                              <td>ALTO TACO</td>        
                            </tr>  
                              
                          </tbody>
                       </table>
                      </div>
                    <div role="tabpanel" class="tab-pane" id="profiletwoS">
                        <table class="kode-table">
                          <thead>
                            <tr>
                              <th>Zona A</th>
                              <th>Zona B</th>
                              <th>Zona C</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>EL DESTAPE</td>
                              <td>LAS PEPAS</td>
                              <td>PURA GARRA</td>
                            </tr>
                            <tr>
                              <td>LA POSTA</td>
                              <td>ACTV F.C.</td>
                              <td>DE MADERA</td>
                            </tr>
                            <tr>
                              <td>EL PORTICO B</td>
                              <td>LA SECTA F.C.</td>
                              <td>LA CHAMPIONS</td>
                            </tr>
                            <tr>
                              <td>VIKINGAS</td>
                              <td>LA RABONA</td>
                              <td>PURA QUIMICA FEM</td>
                            </tr>
                            <tr>
                              <td>BECKS</td>
                              <td>GUARDALAGAMBA</td>
                              <td>PARQUE SUR WOMAN</td>
                            </tr>
                            <tr>
                              <td>LAS TROPEL</td>
                              <td>SAHARA</td>
                              <td>INDIAS TEAM</td>
                            </tr>
                            <tr>
                              <td>LAS TIGRAS</td>
                              <td>LAS QUINOTOS</td>
                              <td>DENSITY V.L.F.C.</td>
                            </tr>
                            <tr>
                              <td>TROPIZ</td>
                              <td>LA TOGA</td>
                              <td>CANCHERAS</td>
                            </tr>
                            <tr>
                              <td>LAS VETE CHAMPIONS</td>
                              <td>QUIMICA PURA F.C.</td>
                              <td>TUVIE F.C.</td>
                            </tr>
                            <tr>
                              <td>LAS AGUILAS</td>
                              <td>DERRAPEISHON</td>
                              <td>MARGINALES</td>
                            </tr>  
                              
                          </tbody>
                       </table>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
              <section class="kode-pagesidebar col-md-12 col-xs-6">
                <div class="container">
                    <div class="kode-detail-element">
                        <h2>Fixture</h2>
                        <h4>Categoria A</h4>
                    </div>
                  <div class="widget tab-widget">

                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Zona A</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zona B</a></li> 
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">     
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                      </div>
                      <div role="tabpanel" class="tab-pane" id="messages">
                      </div>
                    </div>
               </div></div>
                </section>
              <section class="kode-pagesidebar col-md-12">
                <div class="container">
                    <div class="kode-detail-element">
                        <h2>Fixture</h2>
                        <h4>Categoria B</h4>
                    </div>
                  <div class="widget tab-widget">

                    <!-- Nav tabs -->
                    <ul class="widget-tabnav" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Zona A</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Zona B</a></li>
                      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Zona C</a></li>  
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">     
                      </div>
                      <div role="tabpanel" class="tab-pane" id="profile">
                      </div>
                      <div role="tabpanel" class="tab-pane" id="messages">
                      </div>
                    </div>
               </div></div>
                </section>
              <?php } ?>
            </div>
        </section>
           
      </div>
<?php 
    include "footer.php";
?>
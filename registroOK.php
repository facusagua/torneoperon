<?php 
include "header.php";
?>
		  <!--// Page Content //-->
		<section class="kode-pagesection kode-sport-section kode-parallax">
			<div class="container">
				<div class="row">
                    <div class="col-md-12">                  
					</div>	
					 <div class="kode-pagecontent col-md-12">

                  <div class="kode-gallery kode-gallery-pretty">
                    <ul class="row">
                    <h2>Te registraste correctamente. Descarga tu ficha médica.- <a href="certificadomedico.pdf" id="fichamedica" target="_blank"> -> AQUI </a></h2>    
                    </ul>
                  </div>

                </div>
				</div>
			</div>
        </section>
		<!--// Page Content //-->
        <div class="kode-pagesection padding-top-bottom">
          <script type="text/javascript"> 
        $( document ).ready(function() {
               debugger;
                url = $("#fichamedica").attr("href");
                setTimeout(function() { 
                    window.open(url, '_blank')},5000);
        });
        </script>
</div>
<?php 
include "footer.php";
?>
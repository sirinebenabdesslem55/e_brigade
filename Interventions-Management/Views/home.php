<?php


require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';

$users= UsersController::getAllUsers();

?>


<!--<body>
  <section id="container">     
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Liste des Pompiers</h3>  
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Personnel EBrigade</h4>

            </table>
        </div>
    </div>
</div>
</section>
</section>
</section>
</body>-->

<body>

	<!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Dashboard</h3>
        <div class="row mt">
          <div class="col-lg-12">

            <!-- CHART PANELS -->
            <div class="row">
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>MON PROFIL</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  
                  <footer>
                    <div class="centered">
                      <a href="http://localhost/Interventions-Management/monProfil">
                      <button type="button" class="btn btn-success"><i class="fa fa-eye"></i>Afficher</button></a>
		              <button type="button" class="btn btn-theme02"><i class="fa fa-pencil"></i>Modifier</button>
		              
                    </div>
                  </footer>
                </div>
                <!-- /grey-panel -->
              </div>

              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>UTILISATEURS</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-users fa-3x"></i></h1>
                  <p>3 Utilisateurs </p>
                  <footer>
                    <div class="centered">
                    	<a href="http://localhost/Interventions-Management/liste">
                      <button type="button" class="btn btn-theme"><i class="fa fa-list-ul"></i>Liste</button></a>
		              <button type="button" class="btn btn-theme02"><i class="fa fa-pencil-square-o"></i>Ajouter</button>
		              <button type="button" class="btn btn-theme04"><i class="fa fa-search-plus"></i>Rechercher</button>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>INTERVENTION</h5>
                  </div>
                  <!--<canvas id="serverstatus03" height="120" width="120"></canvas>-->
                  <h1 class="mt"><i class="fa fa-fire-extinguisher fa-3x"></i></h1>
                  <p>6 Interventions</p>
                  <footer>
                    <div class="centered">
                      <a href="index.php?c=InterventionsController&m=getAll">
                      <button type="button" class="btn btn-theme"><i class="fa fa-list-ul"></i>Liste</button></a>
                     <a href="http://localhost/Interventions-Management/interventionAdd"> 
		              <button type="button" class="btn btn-theme02"><i class="fa fa-file-o"></i>Rediger</button></a>
		              <button type="button" class="btn btn-theme04"><i class="fa fa-check-square-o"></i>Valider</button>
                    </div>
                  </footer>
                </div>
              </div>

              <!-- /col-md-4 -->
            </div>
            <!-- /row - FIRST ROW OF PANELS -->
            <!--  SECOND ROW OF PANELS -->
            <div class="row">
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>ARCHIVE</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-archive fa-3x"></i></h1>
                  <p>3 Archives</p>
                  <footer>
                    <div class="centered">
                      <a href="index.php?c=InterventionsController&m=getAll">
                      <button type="button" class="btn btn-success"><i class="fa fa-eye"></i>Afficher</button></a>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
               		<h5>VEHICULE</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-truck fa-3x"></i></h1>
                  <p>15 Véhicules</p>
                  <footer>
                    <div class="centered">
                      <a href="http://localhost/Interventions-Management/listevehicule">
                      <button type="button" class="btn btn-success"><i class="fa fa-eye"></i>Afficher</button></a>
		              <button type="button" class="btn btn-theme02"><i class="fa fa-pencil-square-o"></i>Ajouter</button>
                    </div>
                  </footer>
                  
                  
                </div>
              </div>
              <!--  /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>MATERIELS</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-gavel fa-3x"></i></h1>
                  <p>178 Matériaux</p>
                  <footer>
                    <div class="centered">
                      <button type="button" class="btn btn-success"><i class="fa fa-eye"></i>Afficher</button>
		              <button type="button" class="btn btn-theme02"><i class="fa fa-pencil-square-o"></i>Ajouter</button>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row - SECOND ROW OF PANELS -->
            <!--  THIRD ROW OF PANELS -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h2>11º C</h2>
                  <h4>MULHOUSE</h4>
                </div>
              </div>
              <!-- /col-md-4-->
              <!-- WEATHER-2 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="weather-2 pn">
                  <div class="weather-2-header">
                    <div class="row">
                      <div class="col-sm-6 col-xs-6">
                        <p>MULHOUSE</p>
                      </div>
                      <div class="col-sm-6 col-xs-6 goright">
                        <p class="small">Mon March 10, 2020</p>
                      </div>
                    </div>
                  </div>
                  <!-- /weather-2 header -->
                  <div class="row centered">
                    <img src="img/ny.jpg" class="img-circle" width="120">
                  </div>
                  <div class="row data">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <h4><b>16 ºC</b></h4>
                      <h6>21º max</h6>
                      <h6>8º min</h6>
                    </div>
                    <div class="col-sm-6 col-xs-6 goright">
                      <h5><i class="fa fa-sun-o fa-2x"></i></h5>
                      <h6><b>Sunny</b></h6>
                      <h5>7:15 am</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
              <!-- WEATHER-3 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="weather-3 pn centered">
                  <i class="fa fa-sun-o"></i>
                  <h1>30º C</h1>
                  <div class="info">
                    <div class="row">
                      <h3 class="centered">MADRID</h3>
                      <div class="col-sm-6 col-xs-6 pull-left">
                        <p class="goleft"><i class="fa fa-tint"></i> 13%</p>
                      </div>
                      <div class="col-sm-6 col-xs-6 pull-right">
                        <p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row - THIRD ROW OF PANELS -->
            
            <!--  END SIXTH ROW OF PANELS -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>


</body>


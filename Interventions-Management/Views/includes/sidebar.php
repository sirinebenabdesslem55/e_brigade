
<?php
/*
$data= new UsersController();
$users= $data->getAllUsers();
$dd=$data->getOnUser();
*/

?>

<section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="index.html" class="logo"><b>E<span>BRIGADE</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>

<!--<aside class="main-sidebar sidebar-dark-primary elevation-4">-->
  <aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="./Dashio/Dashio/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>

          <li class="mt">
            <a class="active" href="http://localhost/Interventions-Management/home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="http://localhost/Interventions-Management/liste">
              <i class="fa fa-th"></i>
              <span>Liste Personnel</span>
            </a>
              <ul class="sub">
                <li><a>Liste Personnel</a></li>
                <li><a href="index.php?c=employee&m=add">Ajout Personnel</a></li>
              </ul>
          </li>


          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Inventaire</span>
            </a>
              <ul class="sub">
                <li><a href="index.php?c=employee&m=listeVehicule">Véhicules</a></li>
                <li><a href="index.php?c=employee&m=listeMateriel">Materiel</a></li> 
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Interventions</span>
            </a>
              <ul class="sub">
                <li><a href="index.php?c=employee&m=liste">Liste des Interventions</a></li>
                <li><a href="index.php?c=employee&m=liste">Ajouter une Intervention</a></li>
                <li><a href="index.php?c=employee&m=liste">Ajouter un rapport</a></li>
              </ul>
          </li>
          

        </ul>
        <!-- sidebar menu end-->
      </div>
  </aside>

  
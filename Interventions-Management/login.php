<?php
require_once './Controllers/UsersController.php ';

/*if(isset($_POST['P_CODE'])){
$users= UsersController::getOneUserByCode($_POST['P_CODE']);
}*/

if(isset($_POST['submit']))
{
    //$users= UsersController::getOneUserByCode($_POST[P_CODE]);
    $users= UsersController::getOneUserByLogin($_POST[P_CODE], $_POST[P_MDP] );
    

}
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="./Dashio/Dashio/img/favicon.png" rel="icon">
  <link href="./Dashio/Dashio/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="./Dashio/Dashio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="./Dashio/Dashio/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />


  <!-- Custom styles for this template -->
  <link href="./Dashio/Dashio/css/style.css" rel="stylesheet">
  <link href="./Dashio/Dashio/css/style-responsive.css" rel="stylesheet">
  
</head>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
      <!--<form class="form-login" action="index.html">-->

        <h2 class="form-login-heading">Se connecter</h2>
       
        <div class="login-wrap">

          <input type="text" name ="P_CODE" class="form-control" placeholder="User ID"  autofocus>
          <br>
          <input type="password" name="P_MDP" class="form-control" placeholder="Password">

          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Se Rappeller de Moi
            <span class="pull-right">
            <a data-toggle="modal">Mot de passe oublié ?</a>
            </span>
          </label>

          <input type="submit" name="submit" class="btn btn-primary" value='Sign In'>

          <!--<button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>-->

          <hr>
          <div class="login-social-link centered">
            <p>ou se connecter via Ebrigade</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i>Ebrigade</button>
          </div>
          <div class="registration">
            Pas de compte?<br/>
            <a class="" href="#">
              Créer un compte
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mot de passe oublié ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="./Dashio/Dashio/lib/jquery/jquery.min.js"></script>
  <script src="./Dashio/Dashio/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="./Dashio/Dashio/text/javascript" src="./Dashio/Dashio/lib/jquery.backstretch.min.js">
    
  </script>

</body>


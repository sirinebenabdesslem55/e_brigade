<?php
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';

$users= UsersController::getOneUser($_POST['P_ID']);
//die(var_dump($users));
?>

</br>
<div class="container container-fluid" style="">
  <!-- general form elements disabled -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><strong>Modifier un utilisateur</strong></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Prenom</label>
              <input type="text" class="form-control" placeholder="Prenom" value="<?php  echo  $users['P_PRENOM'].''.$users['P_PRENOM2'] ; ?>" >
            </div>
          </div>
          <div class="col-sm-11">
            <div class="form-group">
              <label> Nom </label>
              <input type="text" class="form-control" placeholder="Nom" value="<?php  echo  $users['P_NOM'] ; ?>">
            </div>
          </div>
          <div class="col-sm-11">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email" value="<?php  echo  $users['P_EMAIL'] ; ?>">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label>Sexe </label>
              <input type="text" class="form-control" placeholder="Sexe" value="<?php  echo  $users['P_SEXE'] ; ?>">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label>Grade</label>
              <input type="text" class="form-control" placeholder="Grade" value="<?php  echo  $users['P_GRADE'] ; ?>">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label> Profession </label>
              <input type="text" class="form-control" placeholder="Profession" value="<?php  echo  $users['P_PROFESSION'] ; ?>">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label>Statut </label>
              <input type="text" class="form-control" placeholder="Statut" value="<?php  echo  $users['P_STATUT'] ; ?>">
            </div>
     

            <div class="form-group">

          <input type="submit" class ="btn btn-primary" name="submit" value="valider"> 
            </div>
            
    
      </form>

    </div>
    <!-- /.card-body -->


  </div>
</div>
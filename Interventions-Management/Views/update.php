<?php
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';
if(isset($_POST['P_ID'])){
$users= UsersController::getOneUser($_POST['P_ID']);
}
if(isset($_POST['submit']))
{

    $users= UsersController::update();

}
?>

<body>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row">
          <div class="col-lg-12">

            <form action="" method="POST">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>Information Personelle <?php //var_dump($users);?></h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                  <span class="icn-container">P</span>
                </div>

                <ul class="pricing">
                <li>
                  <div class="row">
                    <label>Nom</label> <input name="P_NOM" type="text" class="form-control" value="<?php echo $users['P_NOM'] ?>">
                  </div>
                  <div class="row">
                    <label >Nom de naissance</label><input name="P_NOM_NAISSANCE" type="text" class="form-control" value="<?php echo $users['P_NOM_NAISSANCE'] ?>">
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Prénom</label><input name="P_PRENOM" type="text" class="form-control" value="<?php echo $users['P_PRENOM'] ?>">
                  </div>
                  <div  class="row">
                    <label>Deuxiéme prénom</label><input name="P_PRENOM2" type="text" class="form-control" value="<?php echo $users['P_PRENOM2'] ?>">
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Date de Naissance</label><input name="P_BIRTHDATE" class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $users['P_BIRTHDATE'] ?>">
                  </div>
                  <div class="row">
                    <div>
                      <label>Lieu</label><input name="P_BIRTHPLACE" type="text" class="form-control" value="<?php echo $users['P_BIRTHPLACE'] ?>">
                    </div>
                    <div>
                      <label>Deptartement</label><input name="P_BIRTH_DEP" type="text" class="form-control" value="<?php echo $users['P_BIRTH_DEP'] ?>">
                    </div>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Sexe</label><input name="P_SEXE" type="text" class="form-control" value="<?php echo $users['P_SEXE'] ?>">
                  </div>
                </li>
              </ul>
              <input type="submit" name="submit" class="btn btn-primary" value='Update'>
            </div>
          </div>



          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="custom-box">
              <div class="servicetitle">
                <h4>Contact</h4>
                <hr>
              </div>
              <div class="icn-main-container">
                <span class="icn-container">C</span>
              </div>

              

              <ul class="pricing">
                <li>
                  <div class="row">
                    <label>Email</label><input name="P_EMAIL" type="text" class="form-control" value="<?php echo $users['P_EMAIL'] ?>">
                  </div>
                  <div class="row">
                    <label >Telephone</label><input name="P_PHONE" type="text" class="form-control" value="<?php echo $users['P_PHONE'] ?>">
                  </div>
                  <div class="row">
                    <label >Telephone 2</label><input name="P_PHONE2" type="text" class="form-control" value="<?php echo $users['P_PHONE2'] ?>">
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Adresse</label><input name="P_ADRESS" type="text" class="form-control" value="<?php echo $users['P_ADDRESS'] ?>">
                  </div>
                  <div  class="row">
                    <label>Ville</label><input name="P_CITY" type="text" class="form-control" value="<?php echo $users['P_CITY'] ?>">
                  </div>
                  <div  class="row">
                    <label>Code Postal</label><input name="P_ZIP_CODE" type="text" class="form-control" value="<?php echo $users['P_ZIP_CODE'] ?>">
                  </div>
                </li>
              </ul>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="custom-box">
              <div class="servicetitle">
                <h4>Profesionelle</h4>
                <hr>
              </div>
              <div class="icn-main-container">
                <span class="icn-container">P</span>
              </div>

              <ul class="pricing">
                <li>
                  <!--<div class="row">
                    <!--<label >ID</label><input type="text" class="form-control" value=<?php echo $e->P_ID; ?>>
                  </div>
                  <div  class="row">
                    <label>Groupe ID</label><input type="text" class="form-control" value=<?php echo $e->GP_ID; ?>>
                  </div>-->
                </li>
                <li>
                  <div class="row">
                    <label >Profession</label><input name="P_PROFESSION" type="text" class="form-control" value="<?php echo $users['P_PROFESSION'] ?>">
                  </div>
                  <div  class="row">
                    <label>Grade</label><input name="P_GRADE" type="text" class="form-control" value="<?php echo $users['P_GRADE'] ?>">
                  </div>
                  <div class="row">
                    <label>Statut</label><input name="P_SATUT" type="text" class="form-control" value="<?php echo $users['P_STATUT'] ?>">
                  </div>
                </li>
                <li>
                  <div  class="row">
                    <label>Date d'engagement</label><input name="P_DATE_ENGAGEMENT" class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $users['P_DATE_ENGAGEMENT'] ?>">
                  </div>
                </li>

              </ul>
            </div>
          </div>

     </form>
    </div>
  </div>

</section>
</section>


</body>


<!--
</br>
<div class="container container-fluid" style="">

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><strong>Modifier un utilisateur</strong></h3>
    </div>
 
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-sm-12">
        
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
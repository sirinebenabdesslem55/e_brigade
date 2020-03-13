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
                    <label>ID</label> <input name="P_ID" type="text" class="form-control" value="<?php echo $users['P_ID'] ?>" readOnly>
                  </div>
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
                    <label>Adresse</label><input name="P_ADDRESS" type="text" class="form-control" value="<?php echo $users['P_ADDRESS'] ?>">
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
                    <label>Statut</label><input name="P_STATUT" type="text" class="form-control" value="<?php echo $users['P_STATUT'] ?>">
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


  </div>
</div>
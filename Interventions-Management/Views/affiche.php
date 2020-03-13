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

<?php

function renseigne($v){
  if(isset($v)){
    echo $v ;}
  else{
    echo 'non renseigné';
}}?>




<body>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row">
          <div class="col-lg-12">

            <form action="" method="POST">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>Information Personelle <!--<?php var_dump($users);?>--></h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                  <span class="icn-container">P</span>
                </div>

                <ul class="pricing">
                <li>
                  <div class="row">
                    <label>ID: </label> <?php renseigne($users['P_ID'])?> 
                  </div>
                  <div class="row">
                    <label>Nom: </label> <?php renseigne($users['P_NOM']) ?>
                  </div>
                  <div class="row">
                    <label >Nom de naissance: </label><?php renseigne($users['P_NOM_NAISSANCE']) ?>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Prénom: </label><?php renseigne($users['P_PRENOM']) ?>
                  </div>
                  <div  class="row">
                    <label>Deuxiéme prénom: </label>
                    <?php renseigne($users['P_PRENOM2'])?>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Date de Naissance: </label><?php renseigne($users['P_BIRTHDATE']) ?>
                  </div>
                  <div class="row">
                    <div>
                      <label>Lieu: </label><?php renseigne($users['P_BIRTHPLACE'] )?>
                    </div>
                    <div>
                      <label>Deptartement: </label><?php renseigne($users['P_BIRTH_DEP'] )?>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Sexe: </label><?php renseigne($users['P_SEXE']) ?>
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
                    <label>Email: </label><?php renseigne($users['P_EMAIL'])?>
                  </div>
                  <div class="row">
                    <label >Telephone: </label><?php renseigne($users['P_PHONE']) ?>
                  </div>
                  <div class="row">
                    <label >Telephone 2: </label><?php renseigne($users['P_PHONE2'])?>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Adresse: </label><?php renseigne($users['P_ADDRESS']) ?>
                  </div>
                  <div  class="row">
                    <label>Ville:</label><?php renseigne($users['P_CITY']) ?>
                  </div>
                  <div  class="row">
                    <label>Code Postal: </label><?php renseigne($users['P_ZIP_CODE']) ?>
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
                  </div>-->
                  <div  class="row">
                    <label>Groupe ID</label><?php renseigne($users['GP_ID']); ?>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <label >Profession: </label><?php renseigne($users['P_PROFESSION']) ?>
                  </div>
                  <div  class="row">
                    <label>Grade: </label><?php renseigne($users['P_GRADE']) ?>
                  </div>
                  <div class="row">
                    <label>Statut: </label><?php renseigne($users['P_STATUT']) ?>
                  </div>
                </li>
                <li>
                  <div  class="row">
                    <label>Date d'engagement: </label><?php echo $users['P_DATE_ENGAGEMENT']?>
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
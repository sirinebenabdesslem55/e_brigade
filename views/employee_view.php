<?php
function fAge($date) {
  $datetime1 = new DateTime("today");
  $datetime2 = new DateTime($date);
  $interval = $datetime2->diff($datetime1);
  return $interval->format('%y');
}  ?>

<body>
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row">

        <div class="col-lg-12">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="custom-box">
              <div class="servicetitle">
                <h4>Information Personelle</h4>
                <hr>
              </div>
              <div class="icn-main-container">
                <span class="icn-container">P</span>
              </div>

              <ul class="pricing">
                <li>
                  <div class="row">
                    <label>Nom: <?php if (isset($e->P_NOM)) echo $e->P_NOM; ?></label>
                  </div>
                  <div class="row">
                    <label >Nom de naissance: <?php if (isset($e->P_NOM_NAISSANCE)) echo $e->P_NOM_NAISSANCE; ?></label>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Prénom:  <?php if (isset($e->P_PRENOM)) echo $e->P_PRENOM; ?></label>
                  </div>
                  <div  class="row">
                    <label>Deuxiéme prénom: <?php if (isset($e->P_PRENOM2)) echo $e->P_PRENOM2; ?></label>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Date de Naissance:  <?php if (isset($e->P_BIRTHDATE)) echo date('d/m/Y',strtotime($e->P_BIRTHDATE)). ' ('.fAge($e->P_BIRTHDATE).' ans)'; ?></label>
                  </div>
                  <div class="row">
                    <div>
                      <label>Lieu:  <?php if (isset($e->P_BIRTHPLACE)) echo $e->P_BIRTHPLACE; ?></label>
                    </div>
                    <div>
                      <label>Deptartement:  <?php if (isset($e->P_BIRTH_DEP)) echo $e->P_BIRTH_DEP; ?></label>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Statut marital:  <?php if (isset($e->MaritalStatus)) echo $e->MaritalStatus; ?></label>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Sexe:  <?php if (isset($e->P_SEXE)) echo $e->P_SEXE; ?></label>
                  </div>
                </li>
              </ul>
              <?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->P_ID.'" data-toggle="tooltip"><i class="btn btn-theme">Modifier</i></a>';?></td>
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
                    <label>Email: <?php if (isset($e->P_EMAIL)) echo $e->P_EMAIL; ?></label>
                  </div>
                  <div class="row">
                    <label >Telephone: <?php if (isset($e->P_PHONE)) echo $e->P_PHONE; ?></label>
                  </div>
                  <div class="row">
                    <label >Telephone 2: <?php if (isset($e->P_PHONE2)) echo $e->P_PHONE2; ?></label>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Adresse:  <?php if (isset($e->P_ADDRESS)) echo $e->P_ADDRESS; ?></label>
                  </div>
                  <div  class="row">
                    <label>Ville: <?php if (isset($e->P_CITY)) echo $e->P_CITY; ?></label>
                  </div>
                  <div  class="row">
                    <label>Code Postal: <?php if (isset($e->P_ZIP_CODE)) echo $e->P_ZIP_CODE; ?></label>
                  </div>
                </li>
              </ul>
              <?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->P_ID.'" data-toggle="tooltip"><i class="btn btn-theme">Modifier</i></a>';?></td>
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
                  <div class="row">
                    <label >ID: <?php if (isset($e->P_ID)) echo $e->P_ID; ?></label>
                  </div>
                  <div  class="row">
                    <label>Groupe ID: <?php if (isset($e->GP_ID)) echo $e->GP_ID; ?></label>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <label >Profession: <?php if (isset($e->P_PROFESSION)) echo $e->P_PROFESSION; ?></label>
                  </div>
                  <div  class="row">
                    <label>Grade: <?php if (isset($e->P_GRADE)) echo $e->P_GRADE; ?></label>
                  </div>
                  <div class="row">
                    <label>Statut:  <?php if (isset($e->P_STATUT)) echo $e->P_STATUT; ?></label>
                  </div>
                </li>
                <li>
                  <div  class="row">
                    <label>Date d'engagement: <?php if (isset($e->P_DATE_ENGAGEMENT)) echo $e->P_DATE_ENGAGEMENT; ?></label>
                  </div>
                </li>

              </ul>
              <?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->P_ID.'" data-toggle="tooltip"><i class="btn btn-theme">Modifier</i></a>';?></td>
            </div>
          </div>

     
    </div>
  </div>

</section>
</section>


</body>
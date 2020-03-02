<body>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row">
          <div class="col-lg-12">

            <form action="index.php?c=employee&m=edit" method="post">
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
                    <label>Nom</label> <input type="text" class="form-control" value=<?php echo $e->P_NOM; ?>>
                  </div>
                  <div class="row">
                    <label >Nom de naissance</label><input type="text" class="form-control" value=<?php echo $e->P_NOM_NAISSANCE; ?>>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Prénom</label><input type="text" class="form-control" value=<?php echo $e->P_PRENOM; ?>>
                  </div>
                  <div  class="row">
                    <label>Deuxiéme prénom</label><input type="text" class="form-control" value=<?php echo $e->P_PRENOM2; ?>>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Date de Naissance</label><input class="form-control datepicker" data-date-format="mm/dd/yyyy" value=<?php echo $e->P_BIRTHDATE; ?>>
                  </div>
                  <div class="row">
                    <div>
                      <label>Lieu</label><input type="text" class="form-control" value=<?php echo $e->P_BIRTHPLACE; ?>>
                    </div>
                    <div>
                      <label>Deptartement</label><input type="text" class="form-control" value=<?php echo $e->P_BIRTH_DEP; ?>>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Statut marital</label><input type="text" class="form-control" value=<?php echo $e->P_NOM; ?>>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Sexe</label><input type="text" class="form-control" value=<?php echo $e->P_SEXE; ?>>
                  </div>
                </li>
              </ul>
              <?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->P_ID.'" data-toggle="tooltip"><i class="btn btn-success">Enregistrer</i></a>';?></td>
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
                    <label>Email</label><input type="text" class="form-control" value=<?php echo $e->P_EMAIL; ?>>
                  </div>
                  <div class="row">
                    <label >Telephone</label><input type="text" class="form-control" value=<?php echo $e->P_PHONE; ?>>
                  </div>
                  <div class="row">
                    <label >Telephone 2</label><input type="text" class="form-control" value=<?php echo $e->P_PHONE2; ?>>
                  </div>
                </li>

                <li>
                  <div class="row">
                    <label>Adresse</label><input type="text" class="form-control" value=<?php echo $e->P_ADDRESS; ?>>
                  </div>
                  <div  class="row">
                    <label>Ville</label><input type="text" class="form-control" value=<?php echo $e->P_CITY; ?>>
                  </div>
                  <div  class="row">
                    <label>Code Postal</label><input type="text" class="form-control" value=<?php echo $e->P_ZIP_CODE; ?>>
                  </div>
                </li>
              </ul>
              <a class="btn btn-success" href="#">Enregistrer</a>
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
                    <label >ID</label><input type="text" class="form-control" value=<?php echo $e->P_ID; ?>>
                  </div>
                  <div  class="row">
                    <label>Groupe ID</label><input type="text" class="form-control" value=<?php echo $e->GP_ID; ?>>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <label >Profession</label><input type="text" class="form-control" value=<?php echo $e->P_PROFESSION; ?>>
                  </div>
                  <div  class="row">
                    <label>Grade</label><input type="text" class="form-control" value=<?php echo $e->P_GRADE; ?>>
                  </div>
                  <div class="row">
                    <label>Statut</label><input type="text" class="form-control" value=<?php echo $e->P_STATUT; ?>>
                  </div>
                </li>
                <li>
                  <div  class="row">
                    <label>Date d'engagement</label><input class="form-control datepicker" data-date-format="mm/dd/yyyy" value=<?php echo $e->P_DATE_ENGAGEMENT; ?>>
                  </div>
                </li>

              </ul>
              <a class="btn btn-success" href="#">Enregistrer</a>
            </div>
          </div>

     </form>
    </div>
  </div>

</section>
</section>


</body>
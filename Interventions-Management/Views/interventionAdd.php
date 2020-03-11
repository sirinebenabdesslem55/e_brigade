<?php
require_once 'C:/wamp64/www/Interventions-Management/Controllers/InterventionsController.php';
$Type_Inters = InterventionsController::getAllType();

//var_dump($EnginsAll);
// Handle AJAX request (start)
//$Type_Inters = InterventionsController::getRolebyEngins("CCFM");
//die($Type_Inters);
// Check if form is submitted successfully 
?> 
</br>


<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Intervention</h3>
        
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Lieu</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Commune</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="Adresse" placeholder="Commune du lieu de l'intervention">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Adresse</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="Adresse" placeholder="Adresse du lieu de l'intervention">
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Genre</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">

                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Type</label>
                    <div class="col-lg-8">
                      <select class="form-control" id="TI_CODE">
                          <?php
                            foreach($Type_Inters as $Type_Inter):
                          ?>
                          <option value="name" value="<?php echo $Type_Inter['TI_CODE']; ?>"> <?php echo $Type_Inter['TI_CODE']; ?> </option>
                          <?php
                            endforeach;
                          ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="agree" class="control-label col-lg-2 col-sm-3">IMPORTANCE</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                      <span class="badge bg-important">Intervention Importante</span>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">OPM</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                      <span class="badge bg-success">Operation Multiple</span>
                    </div>
                  </div>

                  
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->


        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Date & Heure</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Heure de déclenchement</label>
                    <div class="col-lg-4">
                      <i class="far fa-calendar-alt"></i>
                      <input type="datetime-local" class="form-control float-right" name="Date_Heure_Debut" id="reservation">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Heure de d'arriver sur les lieux</label>
                    <div class="col-lg-4">
                      <i class="far fa-calendar-alt"></i>
                      <input type="datetime-local" class="form-control float-right" name="Date_Heure_ArriverLieux" id="reservation">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Heure de fin</label>
                    <div class="col-lg-4">
                      <i class="far fa-calendar-alt"></i>
                      <input type="datetime-local" class="form-control float-right" name="Date_Heure_Fin" id="reservation">
                    </div>
                  </div>


                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>


        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Engin</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Vehicule</label>
                    <div class="col-lg-8">
                     <select class="form-control" id="TV_LIBELLE">
                        <?php
                    $Engins = InterventionsController::getAllEngins();
                    foreach($Engins as $Engin):
                  ?>
                    <option value="<?php echo $Engin['TV_CODE']; ?>"> <?php echo $Engin['TV_LIBELLE']; ?> </option>
                  <?php endforeach; ?>
                     </select>
                    </div>
                  </div>
                </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
      </div>



        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Personelle</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Responsable</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="Adresse" placeholder="Nom et Prénom">
                    </div>
                  </div>
                </form>
              </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
      </div>
      


        <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit">Save</button>
            <button class="btn btn-theme04" type="button">Cancel</button>
        </div>

        


</form>
</div>
</div>
</div>
</div>
</section>
</section>

<?php
require_once './Controllers/HomeController.php ';
require_once './Controllers/VehiculeController.php ';
$vehicules= VehiculeController::getAllVehicule();

?>

<body>
  <section id="container">     
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Liste des Vehicules</h3>  
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Vehicules EBrigade</h4>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">tv code</th>
                            <th scope="col">Immatriculation</th>
                            <th scope="col">vp id</th>
                            <th scope="col">Model</th>
                            <th scope="col">Km</th>
                            <th scope="col">eq id</th>
                            <th scope="col">Annee</th>
                            <th scope="col">Indicatif</th>
                            
                            <th scope="col"><i class="fa fa-eye"> Détails</i></th>
                            <th scope="col"><i class="fa fa-edit"> Modifier</i></th>
                            <th scope="col"><i class="fa fa-trash-o"> Supprimer</i></th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php foreach($vehicules as $vehicule):?>


                      <tr>
                            <td scope="col"><?php echo $vehicule['V_ID'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['TV_CODE'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['V_IMMATRICULATION'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['VP_ID'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['V_MODELE'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['V_KM'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['EQ_ID'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['V_ANNEE'] ; ?></td>
                            <td scope="col"><?php echo $vehicule['V_INDICATIF'] ; ?></td>
                            

                            
                            <td>
                              <form  class="mr-1" method="post" action="details">
                                <button class="btn btn-sm btn-info "><i class="fa fa-eye" ></i></button>
                                <input type="hidden" name="P_ID" value="<?php
                              echo $vehicule['V_ID'];?>
                              ">
                              </form>
                            </td>
                            <td>
                              <form  class="mr-1" method="post" action="update">
                                <input type="hidden" name="P_ID" value="<?php
                                 echo $vehicule['V_ID'];?>">
                                 <button class="btn btn-sm btn-warning"><i class="fa fa-edit" ></i></button>
                              </form>
                            </td>
                            <td>
                              <form  class="mr-1" method="post" action="delete">
                                 <button class="btn btn-sm btn-danger"><i class="fa fa-trash" ></i></button>
                                 <input type="hidden" name="P_ID" value="<?php
                                 echo $vehicule['V_ID'];?>
                                 ">
                              </form>
                            </td>
                            
           
                            </td>
                            
                        </tr>
                        <?php endforeach;?>

        
                     </tbody>
                   </table>
                 </table>
               </div>
             </div>
           </div>
         </section>
       </section>
     </section>
   </body>
   
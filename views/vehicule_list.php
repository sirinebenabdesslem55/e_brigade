<body>
  <section id="container">     
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Inventaire des Véhicules</h3>  
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Véhicules EBrigade</h4>

                <hr>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th></i>Code</th>
                    <th></i>Immatriculation</th>
                    <th>Etat</th>
                    <th></i>Modele</th>
                    <th></i>Kilometre</th>
                    <th></i>Kilometre Revision</th>
                    <th></i>Equipe ID</th>
                    <th></i>Mise en Ciruclation</th>
                    <th></i>Indicatif</th>
                  
                    <th scope="col"><i class="fa fa-eye"> Détails</i></th>
                    <th scope="col"><i class="fa fa-edit"> Modifier</i></th>
                    <th scope="col"><i class="fa fa-trash-o"> Supprimer</i></th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <tbody>

    <?php foreach ($vehiculelist as $e){ ?>
      <tr>
        <td><?php if (isset($e->V_ID)) echo $e->V_ID; ?></td>
        <td><?php if (isset($e->TV_CODE)) echo $e->TV_CODE; ?></td>
        <td><?php if (isset($e->V_IMMATRICULATION)) echo $e->V_IMMATRICULATION; ?></td>
        <td><?php if (isset($e->VP_ID)) echo $e->VP_ID; ?></td>
        <td><?php if (isset($e->V_MODELE)) echo $e->V_MODELE; ?></td>
        <td><?php if (isset($e->V_KM)) echo $e->V_KM; ?></td>
        <td><?php if (isset($e->V_KM_REVISION)) echo $e->V_KM_REVISION; ?></td>
        <td><?php if (isset($e->EQ_ID)) echo date('d/m/Y',strtotime($e->EQ_ID)); ?></td>
        <td><?php if (isset($e->V_ANNEE)) echo $e->V_ANNEE; ?></td>
        <td><?php if (isset($e->V_INDICATIF)) echo $e->V_INDICATIF; ?></td>

        <td><?php if (isset($e->V_ID)) echo '<a href="index.php?c=employee&m=view&id='.$e->V_ID.'" data-toggle="tooltip" title="Voir" class="btn btn-success"><i class="fa fa-eye"></i></a>';?></td>
        <td><?php if (isset($e->V_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->V_ID.'" data-toggle="tooltip" title="Modifier" class="btn btn-warning  btn-sm"><i class="fa fa-edit"></i></a>';?></td>
        <td><?php if (isset($e->V_ID)) echo '<a href="index.php?c=employee&m=delete&id='.$e->V_ID.'" data-toggle="tooltip" title="Supprimer" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>';?></td>
      </tr>
    <?php }?>
    </tbody>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </section>
    </section>   
  </section>
</body>
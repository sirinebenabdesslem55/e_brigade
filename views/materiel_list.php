<body>
  <section id="container">     
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Inventaire du Matériel</h3>  
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Matériel EBrigade</h4>

                <hr>
                <thead>
                  <tr>
                    <th>Catégorie</th>
                    <th></i>Matériel lot</th>
                    <th></i>Quantité</th>
                    <th>Section</th>
                    <th></i>Modele</th>
                    <th></i>Numéro de série</th>
                    <th></i>Statut</th>
                    <th></i>Annee</th>
                    <th></i>Numéro d'inventaire</th>
                    <th></i>Lieu de stockage</th>
                    

                    <th scope="col"><i class="fa fa-eye"> Détails</i></th>
                    <th scope="col"><i class="fa fa-edit"> Modifier</i></th>
                    <th scope="col"><i class="fa fa-trash-o"> Supprimer</i></th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <tbody>

    <?php foreach ($materiellist as $e){ ?>
      <tr>
        <td><?php if (isset($e->TM_USAGE)) echo $e->TM_USAGE; ?></td>
        <td><?php if (isset($e->TM_CODE)) echo $e->TM_CODE; ?></td>
        <td><?php if (isset($e->MA_NB)) echo $e->MA_NB; ?></td>
        <td><?php if (isset($e->S_ID)) echo $e->S_ID; ?></td>
        <td><?php if (isset($e->MA_MODELE)) echo $e->MA_MODELE; ?></td>
        <td><?php if (isset($e->MA_NUMERO_SERIE)) echo $e->MA_NUMERO_SERIE; ?></td>
        <td><?php if (isset($e->VP_ID)) echo $e->VP_ID; ?></td>
        <td><?php if (isset($e->MA_ANNEE)) echo $e->MA_ANNEE; ?></td>
        <td><?php if (isset($e->MA_INVENTAIRE)) echo $e->MA_INVENTAIRE; ?></td>
        <td><?php if (isset($e->MA_LIEU_STOCKAGE)) echo $e->MA_LIEU_STOCKAGE; ?></td>
        
        <td><?php if (isset($e->MA_ID)) echo '<a href="index.php?c=employee&m=view&id='.$e->MA_ID.'" data-toggle="tooltip" title="Voir" class="btn btn-success"><i class="fa fa-eye"></i></a>';?></td>
        <td><?php if (isset($e->MA_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->MA_ID.'" data-toggle="tooltip" title="Modifier" class="btn btn-warning  btn-sm"><i class="fa fa-edit"></i></a>';?></td>
        <td><?php if (isset($e->MA_ID)) echo '<a href="index.php?c=employee&m=delete&id='.$e->MA_ID.'" data-toggle="tooltip" title="Supprimer" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>';?></td>
        
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
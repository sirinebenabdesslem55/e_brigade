<body>
  <section id="container">     
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Liste des Pompiers</h3>  
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Personnel EBrigade</h4>

                <hr>
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th></i>Prenom</th>
                    <th></i>ID</th>
                    <th>Telephone</th>
                    <th></i>Section</th>
                    <th></i>Titre</th>
                    <th></i>ID Groupe</th>
                    <th></i>Date d'embauche</th>
                    <th></i>Mail</th>
                  
                    <th scope="col"><i class="fa fa-eye"> Détails</i></th>
                    <th scope="col"><i class="fa fa-edit"> Modifier</i></th>
                    <th scope="col"><i class="fa fa-trash-o"> Supprimer</i></th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <tbody>
    <?php foreach ($employeelist as $e){ ?>
      <tr>
        <td><?php if (isset($e->P_NOM)) echo $e->P_NOM; ?></td>
        <td><?php if (isset($e->P_PRENOM)) echo $e->P_PRENOM; ?></td>
        <td><?php if (isset($e->P_ID)) echo $e->P_ID; ?></td>
        <td><?php if (isset($e->P_PHONE)) echo $e->P_PHONE; ?></td>
        <td><?php if (isset($e->P_SECTION)) echo $e->P_SECTION; ?></td>
        <td><?php if (isset($e->CTitle)) echo $e->CTitle; ?></td>
        <td><?php if (isset($e->GP_ID)) echo $e->GP_ID; ?></td>
        <td><?php if (isset($e->P_DATE_ENGAGEMENT)) echo date('d/m/Y',strtotime($e->P_DATE_ENGAGEMENT)); ?></td>
        <td><?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?></td>

        <td><?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=view&id='.$e->P_ID.'" data-toggle="tooltip" title="Voir" class="btn btn-success"><i class="fa fa-eye"></i></a>';?></td>
        <td><?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->P_ID.'" data-toggle="tooltip" title="Modifier" class="btn btn-warning  btn-sm"><i class="fa fa-edit"></i></a>';?></td>
        <td><?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=delete&id='.$e->P_ID.'" data-toggle="tooltip" title="Supprimer" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>';?></td>
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
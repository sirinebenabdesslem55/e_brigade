<main role="main" class="container">
    <div class="starter-template">
      <h1>Affichage de la liste des employés</h1>
    </div>

  <div class="row">
    <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Telephone</th>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Section</th>
        <th scope="col">Date Embauche</th>
        <th scope="col">Mail</th>
        <th scope="col"><i class="fas fa-eye"></i></th>
        <th scope="col"><i class="fas fa-edit"></i></th>
        <th scope="col"><i class="fas fa-trash-alt"></i></th>

      </tr>
    </thead>
    <tbody>
    <?php foreach ($employeelist as $e){ ?>
      <tr>
        <td><?php if (isset($e->P_ID)) echo $e->P_ID; ?></td>
        <td><?php if (isset($e->P_PHONE)) echo $e->P_PHONE; ?></td>
        <td><?php if (isset($e->P_SECTION)) echo $e->P_SECTION; ?></td>
        <td><?php if (isset($e->CTitle)) echo $e->CTitle; ?></td>
        <td><?php if (isset($e->P_NOM)) echo $e->P_NOM; ?></td>
        <td><?php if (isset($e->P_PRENOM)) echo $e->P_PRENOM; ?></td>
        <td><?php if (isset($e->GP_ID)) echo $e->GP_ID; ?></td>
        <td><?php if (isset($e->P_DATE_ENGAGEMENT)) echo date('d/m/Y',strtotime($e->P_DATE_ENGAGEMENT)); ?></td>
        <td><?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?></td>
        <td><?php if (isset($e->EmployeeID)) echo '<a href="index.php?c=employee&m=view&id='.$e->EmployeeID.'" data-toggle="tooltip" title="Voir" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>';?></td>
        <td><?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=edit&id='.$e->P_ID.'" data-toggle="tooltip" title="Modifier" class="btn btn-warning  btn-sm"><i class="fas fa-edit"></i></a>';?></td>
        <td><?php if (isset($e->P_ID)) echo '<a href="index.php?c=employee&m=delete&id='.$e->P_ID.'" data-toggle="tooltip" title="Supprimer" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>';?></td>
      </tr>
    <?php }?>
    </tbody>
    </table>
  </div>
</main><!-- /.container -->
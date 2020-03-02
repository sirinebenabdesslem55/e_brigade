<!--kjbrfoazgebfolazheflearhflzernhflerhflernflegnlednfgpzerjnfgmlzernpgfzergfpneprgfne-->

<?php
class EmployeeController
{
  public function construct()
  {
  }

  public function index()
  {
    $this->liste();
  }
  public function liste()
  {
    require_once MODELS . DS . 'employeeM.php';
    $m = new EmployeeModel();
    $employees = $m->listAll();
    // Affichage au sein de la vue des données récupérées via le model
    require_once CLASSES . DS . 'view.php';
    $v = new View();
    $v->setVar('employeelist', $employees);
    $v->render('employee', 'list');
  }
  public function listeVehicule()
  {
    require_once MODELS . DS . 'employeeM.php';
    $m = new EmployeeModel();
    $employees = $m->listAllVehicule();
    // Affichage au sein de la vue des données récupérées via le model
    require_once CLASSES . DS . 'view.php';
    $v = new View();
    $v->setVar('vehiculelist', $employees);
    $v->render('vehicule', 'list');
  }
  public function listeMateriel()
  {
    require_once MODELS . DS . 'employeeM.php';
    $m = new EmployeeModel();
    $employees = $m->listAllMateriel();
    // Affichage au sein de la vue des données récupérées via le model
    require_once CLASSES . DS . 'view.php';
    $v = new View();
    $v->setVar('materiellist', $employees);
    $v->render('materiel', 'list');
  }
  public function view($id = null)
  {
    require_once MODELS . DS . 'employeeM.php';
    $m = new EmployeeModel();
    require_once CLASSES . DS . 'view.php';
    $v = new View();
    if ($employee = $m->listOne($id)) $v->setVar('e', $employee);
    // Affichage au sein de la vue des données récupérées via le model
    $v->render('employee', 'view');
  }
  public function edit($id = null)
  {
    //variable de la view
    if (isset($_POST['id'])) {
      
      $P_ID = strtolower(trim($_POST['id']));
      $P_NOM = strtolower(trim($_POST['nom']));
      $P_NOM_NAISSANCE = strtolower(trim($_POST['nomnaissance']));
      $P_PRENOM = strtolower(trim($_POST['prenom']));
      $P_PRENOM2 = strtolower(trim($_POST['prenom2']));
      $P_BIRTHDATE = strtolower(trim($_POST['datenaissance']));
      $P_BIRTHPLACE = strtolower(trim($_POST['lieunaissance']));
      $P_BIRTH_DEP = strtolower(trim($_POST['depnaissance']));
      $P_SEXE = strtolower(trim($_POST['sexe']));
      $P_PHONE = strtolower(trim($_POST['portable']));
      $P_PHONE2 = strtolower(trim($_POST['portable2']));
      $P_EMAIL = strtolower(trim($_POST['email']));
      $P_ADDRESS = strtolower(trim($_POST['adresse']));
      $P_CITY = strtolower(trim($_POST['ville']));
      $P_ZIP_CODE = strtolower(trim($_POST['codepostal']));
      $GP_ID = strtolower(trim($_POST['groupeID']));
      $P_PROFESSION = strtolower(trim($_POST['profession']));
      $P_STATUT = strtolower(trim($_POST['statut']));
      $P_DATE_ENGAGEMENT = strtolower(trim($_POST['dateEng']));
      $P_PHONE = strtolower(trim($_POST['portable']));
      $P_GRADE = strtolower(trim($_POST['grade']));


      //model lien entre controller et la base
      require_once MODELS . DS . 'employeeM.php';
      $m = new EmployeeModel();
      $result = $m->updateOne($P_NOM,$P_NOM_NAISSANCE,$P_PRENOM,$P_PRENOM2,$P_BIRTHDATE,$P_BIRTHPLACE,$P_BIRTH_DEP,$P_SEXE,$P_PHONE,$P_PHONE2,$P_EMAIL,$P_ADDRESS,$P_CITY,$P_ZIP_CODE,$GP_ID, $P_PROFESSION,$P_GRADE ,$P_STATUT,$P_DATE_ENGAGEMENT,$P_ID);

      $this->liste();
    }else{
    require_once MODELS . DS . 'employeeM.php';
    //appel vers le modele
    $m = new EmployeeModel();
    require_once CLASSES . DS . 'view.php';
    $v = new View();
    if ($employee = $m->listOne($id))
      $v->setVar('e', $employee);
      //redirection vers employee_edit.php
      //formulaire
    $v->render('employee', 'edit');
    
  }
  }
  public function delete($id = null)
  {
    require_once MODELS . DS . 'employeeM.php';
    $m = new EmployeeModel();
    $result = $m->delete($id);
    $this->liste();
  }

  public function add()
  {
    if (isset($_POST['id'])) {
      $EmployeeID = strtolower(trim($_POST['id']));
      $ContactID = strtolower(trim($_POST['contactid']));
      

      require_once MODELS . DS . 'employeeM.php';
      $m = new EmployeeModel();
      $result = $m->addOne($EmployeeID, $ContactID);

    
      $this->liste();
    }else{
    require_once CLASSES . DS . 'view.php';  
    $v = new View();
    $v->render('employee', 'add');
    }
  }
}

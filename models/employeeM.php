<!--ldflobrflzbrflrbflrbflqsbfklqesdbjflsdbfvolqersbdfrvlesrfvnlernglerhnjgvlezrngfvlarnfngfplnaq gr-->

<?php
class EmployeeModel
{
  public function construct()
  {
  }
  public function listAll()
  {
    $sql = 'select P_DATE_ENGAGEMENT, P_SECTION, P_ID, P_PRENOM, P_PRENOM2,P_NOM_NAISSANCE, P_SEXE, P_CIVILITE, P_GRADE, P_PROFESSION, P_STATUT, P_SECTION, P_FIN, C_ID, GP_ID2, P_NOM,P_EMAIL,P_PHONE,GP_ID, P_BIRTHDATE, P_BIRTHPLACE, P_BIRTH_DEP, P_PHONE, P_PHONE2, P_ABBREGE, P_ADDRESS, P_ZIP_CODE, P_CITY
      from pompier';
    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $stmt = $dbh->prepare($sql);
      //$stmt->bindParam(":var",$var);
      $res = ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
      $dbh = null;
      return $res;
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }
  public function listAllVehicule()
  {
    $sql = 'select V_ID, TV_CODE, V_IMMATRICULATION, VP_ID, V_MODELE, V_KM, V_KM_REVISION, EQ_ID, V_ANNEE, V_INDICATIF 
      from vehicule';
    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $stmt = $dbh->prepare($sql);
      //$stmt->bindParam(":var",$var);
      $res = ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
      $dbh = null;
      return $res;
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }
  public function listAllMateriel()
  {
    $sql = 'select T.TM_CODE, T.TM_DESCRIPTION, T.TM_USAGE, T.TM_LOT, T.TT_CODE, M.MA_ID, T.TM_ID, M.MA_NUMERO_SERIE, M.MA_COMMENT, M.MA_LIEU_STOCKAGE, M.MA_MODELE, M.MA_ANNEE, M.MA_NB, M.S_ID, M.VP_ID, M.MA_EXTERNE, M.MA_INVENTAIRE, M.MA_UPDATE_DATE, M.MA_REV_DATE, M.V_ID, M.MA_PARENT, M.TV_ID
      from materiel as M
      inner join type_materiel as T on M.TM_ID=T.TM_ID
      ';

    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $stmt = $dbh->prepare($sql);
      //$stmt->bindParam(":var",$var);
      $res = ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
      $dbh = null;
      return $res;
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }
  public function listOne($id)
  {
    $sql = 'select P_DATE_ENGAGEMENT, P_SECTION, P_ID, P_PRENOM, P_PRENOM2,P_NOM_NAISSANCE, P_SEXE, P_CIVILITE, P_GRADE, P_PROFESSION, P_STATUT, P_SECTION, P_FIN, C_ID, GP_ID2, P_NOM,P_EMAIL,P_PHONE,GP_ID, P_BIRTHDATE, P_BIRTHPLACE, P_BIRTH_DEP, P_PHONE, P_PHONE2, P_ABBREGE, P_ADDRESS, P_ZIP_CODE, P_CITY
      from pompier';
    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(":id", $id);
      $res = ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
      $dbh = null;
      return current($res);
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }

  public function updateOne($nom,$nom2,$prenom,$prenom2,$datenaissance,$lieunaissance,$depnaissance,$sexe,$phone,$phone2,$mail,$address,$ville,$zipcode,$groupeID, $profession,$grade,$statut,$dateengagement,$P_ID)
  {

    $sql = "UPDATE pompier SET P_PRENOM=?,P_PRENOM2=? ,P_NOM=?, P_NOM_NAISSANCE=?,P_BIRTHPLACE=?, P_BIRTHDATE=?, P_BIRTH_DEP=?, P_SEXE=?, P_PHONE=?, P_PHONE2=?,P_EMAIL=?, P_ADDRESS=?,P_CITY=?, P_ZIP_CODE=?, GP_ID=?, P_PROFESSION=?,P_GRADE=?,P_STATUT=?, P_DATE_ENGAGEMENT=? WHERE P_ID=?";
    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $dbh->prepare($sql)->execute([$nom,$nom2,$prenom,$prenom2,$datenaissance,$lieunaissance,$depnaissance,$sexe,$phone,$phone2,$mail,$address,$ville,$zipcode,$groupeID, $profession,$grade,$statut,$dateengagement,$P_ID]);
      $dbh = null;
      return 'ok';
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();

    }
  }



  public function delete($id)
  {

    $sql = "DELETE FROM pompier WHERE 	P_ID =?";
    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $dbh->prepare($sql)->execute([$id]);
      $dbh = null;
      return 'ok';
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }


  public function addOne($id,$contactID)
  {
    $sql = "INSERT INTO employee (EmployeeID, NationalIDNumber, ContactID, LoginID, ManagerID, Title, BirthDate, MaritalStatus, Gender, HireDate, SalariedFlag, VacationHours, SickLeaveHours, CurrentFlag, rowguid)
    VALUES (?,54545,?,'fghfghfghf',121212,'gghfhg','2020-02-20 00:00:00','f','g','2020-02-20 00:00:00',0,'12','12',0,'000111')";

    try {
      $dbh = new PDO('mysql:host=localhost;dbname=ebrigade;charset=utf8', 'root', 'sirine');
      $dbh->prepare($sql)->execute([$id,$contactID]);
      $dbh = null;
      return 'ok';
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }
}

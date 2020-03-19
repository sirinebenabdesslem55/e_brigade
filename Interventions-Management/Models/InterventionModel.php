<?php
require_once "C:/wamp64/www/Interventions-Management/DATABASE/DB.php";

class interventionsModel {
    public function construct(){}

    public  function getall(){
        $sql='SELECT * FROM intervention ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";

        }
    }


    public  function getResponsableIntervention($id){
         $sql='SELECT R.* FROM responsable as R,personnel as P
                        where P.Responsable_idResponsable = R.idResponsable and P.idPersonnel=:id   ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            
        }
    }


    public  function getbyinterventionid($id){
        $sql='SELECT * FROM intervention where intervention.Numero_Intervention=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return current($res);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            
        }
    }
    public  function getenginbyinterventionID($id){
        $sql='SELECT E.* FROM intervention as I, intervention_engins as IE , engins as E where I.Numero_Intervention =IE.Intervention_Numero_Intervention 
                  and IE.Engins_idEngins=E.idEngins and I.Numero_Intervention=:id ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            
        }
    }

    public  function getpersonnelbyenginID($id,$interventionid){
         $sql='SELECT P.* FROM engins_personnel as EP , engins as E,personnel as P 
 where  E.idEngins = EP.Engins_idEngins and EP.Personnel_idPersonnel =P.idPersonnel 
 and E.idEngins=:id and EP.Intervention_Numero_intervention =:interventionid ';
        try {
            $db = DB::connect();
            $stmt=$db->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":interventionid",$interventionid);
            $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
            $db = null;
            return $res;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            
        }
    }

    

    
}
?>

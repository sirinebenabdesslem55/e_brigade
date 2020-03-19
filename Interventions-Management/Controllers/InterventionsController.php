<?php
require_once CLASSES.DS.'view.php';
require_once 'C:/wamp64/www/Interventions-Management/Models/InterventionModel.php ';

class InterventionsController
{




    public static function getAll()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->getall();
        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->render('listeintervention');
    }
   

    public static function validation()
    {
        $t = new interventionsModel();
        $v=new View();
        $v->render('validationrapport');
    }




     public static function redaction()
    {
        $t = new interventionsModel();
        $v=new View();
        $v->render('redactionrapport');
    }





    static public function getAllType()
    {
        $type = file_get_contents("http://localhost/Api/utilisateurs.php?c=interventions&m=getAll");
        $r = json_decode($type,true);
        return $r;
    }

    static public function getAllEngins(){
        $engins = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getEngins");
        $r = json_encode($engins,true);
        return $r;
    }
    /* public static function detailintervention($id)
    {
        $interventionM = new interventionsModel();
        $Intervention =  $interventionM->getbyinterventionid($id);
        $listeengin =  $interventionM->getenginbyinterventionID($id);
        $listepersonnel =  $interventionM->getpersonnelbyenginID(1,$id);    
        $v=new View();
        $v->setVar('intervention',$Intervention[0]);
        $v->setVar('engins',$listeengin);
        $v->setVar('idinterventions',$id);
        $v->setVar('interventionM',$interventionM);
        $v->render('interventiondetail');
    }*/
}

?>

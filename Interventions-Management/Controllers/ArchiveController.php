<?php
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';

class ArchiveController
{

    public static function getAll()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);

        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->render('intervention');
    }
    public static function detailintervention($id)
    {
        $interventionM = new interventionsModel();
        $Intervention =  $interventionM->getbyinterventionid($id);
        //var_dump($listeIntervention);
        $v=new View();
        $v->setVar('intervention',$Intervention);
        $v->render('Vueintervention');
    }

}



?>

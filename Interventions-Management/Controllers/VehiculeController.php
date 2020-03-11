<?php
require_once './Models/VehiculeModel.php ';

class VehiculeController{

public static function getAllVehicule(){
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getAll");
    return json_decode($vehicules,true);

    
}

/*public static function delete(){
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
}*/

}

?>
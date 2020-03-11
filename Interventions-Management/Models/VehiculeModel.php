<?php

class VehiculeModel
{

    static public function getAll()
    {

        $stmt=DB::connect()->prepare('SELECT * FROM vehicule');
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    /*static public function add($data)
    {

        $stmt=DB::connect()->prepare('INSERT INTO pompier(P_NOM) VALUES (:Nom)');
        $stmt->bindParam(':Nom',$data['P_NOM']);
        
        if($stmt->execute())
        {
            return 'ok';

        }
        else{

            return 'NOTOK';

        }
    }*/
}
?>
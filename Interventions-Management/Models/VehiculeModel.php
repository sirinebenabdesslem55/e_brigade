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


    //Salah: correction ---> Obtenir un vehicule et modification 
    /*static public function getOneVehicule($p_id)
    {

        $stmt=DB::connect()->prepare('SELECT * FROM vehicule WHERE V_ID = $p_id');
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }*/
    /*static public function updateUser($P_NOM,$P_NOM_NAISSANCE,$P_PRENOM,$P_PRENOM2,$P_BIRTHDATE,$P_BIRTHPLACE,
        $P_BIRTH_DEP,$P_SEXE,$P_EMAIL,$P_PHONE,$P_PHONE2,$P_ADDRESS,$P_CITY,$P_ZIP_CODE,$P_PROFESSION,$P_GRADE,$P_STATUT,$P_DATE_ENGAGEMENT)
    {
        $array = array(
            $P_NOM,
            $P_NOM_NAISSANCE,
            $P_PRENOM,
            $P_PRENOM2,
            $P_BIRTHDATE,
            $P_BIRTHPLACE,
            $P_BIRTH_DEP,
            $P_SEXE,
            $P_EMAIL,
            $P_PHONE,
            $P_PHONE2,
            $P_ADDRESS,
            $P_CITY,
            $P_ZIP_CODE,
            $P_PROFESSION,
            $P_GRADE,
            $P_STATUT,
            $P_DATE_ENGAGEMENT
        );
        return $array;
    }*/

}

}
?>
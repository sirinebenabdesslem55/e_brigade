<?php

class User
{
    static public function login($data)
        
    {

        $username=$data['P_CODE'];

        try
        {
            $query= 'SELECT P_ID, P_MDP, LENGTH(P_MDP)  as MDP_SIZE, P_PASSWORD_FAILURE FROM pompier WHERE P_CODE=:code';
            $stmt = DB::connect()->prepare($query);
            $stmt = execute(array(":code" => $username ));
            if($stmt->execute()){
            return 'ok';

        }
        }
        catch(PDOException $e)
        {
            echo 'erreur' . $e->getMessage();
        }
    } 

    static public function getAll()
    {
        $stmt=DB::connect()->prepare('SELECT * FROM pompier');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function add($data)
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
    }

    static public function getUser($data)
    {
    
    }



    static public function updateUser($P_NOM,$P_NOM_NAISSANCE,$P_PRENOM,$P_PRENOM2,$P_BIRTHDATE,$P_BIRTHPLACE,
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
    }

}

//$test = User::updateUser("benabdesslem","null","sirine","myriam", "020993", "lille");
//die(print_r($test));

?>
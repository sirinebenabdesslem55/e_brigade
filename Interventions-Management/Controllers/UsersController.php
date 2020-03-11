

<?php
require_once './Models/User.php ';

class UsersController{

    public function index(){
        $this->getAllUsers();
    }

public static function getAllUsers()
{
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
    //$users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    //$users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    //return $d=json_decode($users,true);
}

public static function getOneUser($id){ 
     $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=getOne&P_ID=".$id);
     return json_decode($users,true);
}

/*public function getOnUser(){
    if(isset($_POST['P_ID'])){
    $data =array(
        'P_ID'=> $_POST['P_ID']);
    $user= User::getUser($data);
    return $user;
    }
}*/

public static function update(){
    $m=new User();
    if(isset($_POST['submit'])){
            

            $array = array(
                        $_POST['P_NOM'],
                        $_POST['P_NOM_NAISSANCE'],
                        $_POST['P_PRENOM'],
                        $_POST['P_PRENOM2'],
                        $_POST['P_BIRTHDATE'],
                        $_POST['P_BIRTHPLACE'],
                        $_POST['P_BIRTH_DEP'],
                        $_POST['P_SEXE'],
                        $_POST['P_EMAIL'],
                        $_POST['P_PHONE'],
                        $_POST['P_PHONE2'],
                        $_POST['P_ADDRESS'],
                        $_POST['P_CITY'],
                        $_POST['P_ZIP_CODE'],
                        $_POST['P_PROFESSION'],
                        $_POST['P_GRADE'],
                        $_POST['P_STATUT'],
                        $_POST['P_DATE_ENGAGEMENT']
        );

        die(print_r($array));
        //if($m->updateUser($_POST['P_NOM'],$_POST['P_NOM_NAISSANCE'],$_POST['P_PRENOM'],
        //$_POST['P_PRENOM2'],$_POST['P_BIRTHDATE'],$_POST['P_BIRTHPLACE'], $_POST['P_BIRTH_DEP'],$_POST['P_SEXE'],$_POST['P_EMAIL'],$_POST['P_PHONE'],$_POST['P_PHONE2'],$_POST['P_ADDRESS'],$_POST['P_CITY'],$_POST['P_ZIP_CODE'],$_POST['P_PROFESSION'],$_POST['P_GRADE'],$_POST['P_STATUT'],$_POST['P_DATE_ENGAGEMENT']))
        //{
        // $this->index(); 
        //}
    }else{
        $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=update");
        return json_decode($users,true);
    }
}
public static function delete(){
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
}
public static function getusergrade(){
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
}
public static function right(){

    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
}



public function auth(){

if(isset($_POST['submit']))
{
//nomé le input username la ou je saisi le username
$data['P_CODE']=$_POST['username'];
$result =User::login($data);
if($result->P_CODE === $_POST['username'] && password_verify($_POST['password'],$result->P_MDP ));

$_SESSION['logged']= true;
$_SESSION['username']=$result->P_CODE;

header('Location: https://localhost/Interventions-Management/home');
}else
{

echo 'error Pseudo ou mot de pass est incorect';
header('Location: https://localhost/Interventions-Management/liste');

}

}

}
//$test= UsersController::getOneUser(1);
//var_dump($test);

?>



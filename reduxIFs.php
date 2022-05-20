<?php


echo "Login User \n";

echo "Digite seu login: \n";
$user = readline();
echo "Digite seu senha: \n";
$senha = readline();
echo "--------------------------------- \n";

$infoUser = UserDb::infoUser();
$infoUser =  $infoUser[0];


$bar = array( $bar = UserController::getInstance() , $bar->Logeduser($user,$senha,$infoUser));

var_dump($bar[1]);

echo isset($bar[1]) && $bar[1]? "Usuario Logado \n": die();
//ok funcionando
class UserDb{

	static function infoUser(){
	 	return array(
	 		 $infoUser = new User 
		);
	}
}

class User{
	//Simula uma requisicao do banco de dados
	public function UserGetLogin(){
		return 'Usuario';
	}
	public function UserGetPassword(){
		return 'senha';
	}
}

class UserController
{
	static $instance; 

	static function getInstance(){
	
	if(UserController::$instance == null)

			return UserController::$instance = new UserController();
	else 
		return UserController::$instance;
	}

    function Logeduser($inputUser,$inputPass,$infoUser)
    {
    	$loget = false;
    	//var_dump($inputUser);
    	if(empty($inputUser) || empty($inputPass))	
    	{
    		echo "Campos nao preenchidos \n";
    		die();
    	}
    	if(strcmp($inputUser, $infoUser->UserGetLogin())){
    		echo "Usuario Invaido \n";
    		die();
    	}
    	if(strcmp($inputPass, $infoUser->UserGetPassword())){
    		echo "Senha Invaida \n";
    		die();
    	}
    	else
    	{
    		$loget = true;
        	return $loget;
    	}
    }
}

?>

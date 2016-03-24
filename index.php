<?php
include('config/DB.php');

$logins = array('luiz' => '123456',
				'joao' => '654321',
				'joana' => '123123');

if (isset($_POST['btn_send'])) { //quando clicar faca o seguinte:
	
	$db_conn = mysqli_connect(HOST_DB, 
							  USUARIO_DB, 
							  SENHA_DB,
							  NOME_DB);
							  
	$stmt = mysqli_prepare($db_conn, ' SELECT 	
									 ')
	
	if (isset($logins[$_POST['login']])) { //se for V o que ele digitou faca:
		
		if ($logins[$_POST['login']] == $_POST['senha']) { //compare senha e login se for V vá para:
			
			include('templates/admin_tpl.php'); //tela de admin
			
		} else { // se nao msg01 se o login for o mesmo com senha diferente
			
			$msg = '<br><b>Usuário ou Senha Incorretos!<b><br>'; //mostre senhaOUuser incorretos
			
			include('templates/login_tpl.php');// tela de login
		}
	
	} else { // se nao msg02 se senha e login forem diferentes
				
		$msg = '<br><b>Usuário ou Senha Inválidos<b><br>';
				
		include('templates/login_tpl.php');			
				
	}
	
} else { // se nao caso nao for nada digitado e clicar no buttom va para
	
	include('templates/login_tpl.php');	// tela de login
	
}
?>
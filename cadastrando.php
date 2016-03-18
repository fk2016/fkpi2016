<?php

// dados para conexão no banco
	$host= 'localhost';
	$bd='fkdb';
	$user= 'root';
	$pass='';

// recebe os dados do html

$nome=$_POST['nome'];
$sobrenome=$_POST['sobre'];
$email=md5($_POST['email']);
$senha=$_POST['senha'];
$tipo=$_POST['tipo'];
$sexo=$_POST['sexo'];
$pais=$_POST['pais'];
$termo=$_POST['termo'];



//Gravando no banco de dados! 
//conectando com o localhost - mysql

	$conexao=mysql_connect($host,$user,$pass) or die (mysql_error()) ;



if (!$conexao) 	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco) die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	$search = mysql_query("SELECT * FROM Cadastro WHERE email = '$email'");
	
	if(@mysql_num_rows($search) > 0){
				
		//Verifica se o email já existe	
			
		echo "<script> alert('Email já cadastrado! Por favor utilize outro email ou tente recuperar sua senha!'); window.location.replace('Cadastro.php'); </script>"; 
	}else{

		//grava no banco de dados
		$query="insert into registro ('nome','sobrenome','email','senha','acesso','sexo','pais','termo') value ('$nome','$sobrenome','$email','$senha','$tipo','$sexo','$pais','$termo')";

		mysql_query($query) or die(mysql_error());
	}	
?>
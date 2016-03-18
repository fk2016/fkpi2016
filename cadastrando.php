<?php

// recebe os dados do html

$nome=$_POST['nome'];
$sobrenome=$_POST['sobre'];
$email=$_POST['email'];
$senha=md5($_POST['senha']);
$tipo=$_POST['tipo'];
$sexo=$_POST['sexo'];
$pais=$_POST['pais'];
$termo=$_POST['termo'];

// dados para conexão no banco

	$host= 'localhost';
	$banco='fkdb';
	$user= 'root';
	$pass='';
	
	$conexao=mysql_connect($host,$user,$pass) or die (mysql_error()) ;
	mysql_select_db($banco) or die (mysql_error());

?>

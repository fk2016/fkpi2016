<?php

// recebe os dados do html



// dados para conexão no banco

	$host= 'localhost';
	$banco='fkdb';
	$user= 'root';
	$pass='';
	
	$conexao=mysql_connect($host,$user,$pass) or die (mysql_error()) ;
	mysql_select_db($banco) or die (mysql_error());

?>

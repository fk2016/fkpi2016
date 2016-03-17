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

$conexao="localhost";
$user="root";
$senha="";

$connect=mysql_connect('$conexao','$user','$senha');
$db = mysql_select_db('fkdb');
$query_select = "SELECT nome FROM registro WHERE nome = '$nome'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['nome'];

if (!$connect){

	die('Não foi possivel conectar no banco de dados:'.mysql_error());

} else{

    echo"Conectado com sucesso";
    mysql_close($connect);
}
?>

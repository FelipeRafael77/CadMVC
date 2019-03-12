<?php
/*Esse arquivo foi criado para ter somente uma conexão com o banco de dados*/
require 'environment.php';

$config = array(); //array com as informações do banco

//a seguir vai ser criado um teste para e conectar com o bd, nesse projeto isso não terá muito valor, pois, ele não será hospedado.
if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/Trabalho/CadMVC/");
	$config['dbname'] = 'cadastro_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

}else{
	$config['dbname'] = 'cadastro_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
global $db;
try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
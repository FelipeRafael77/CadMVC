<?php
session_start();
require 'config.php';

//auto load serve para automatizar o carregamento das classes
//Sempre que uma classe for estanciada vai ser procurada em uma das 3 pastas( a view não precisa pois só tem html)
spl_autoload_register(function($class){

	if(file_exists('controllers/'.$class.'.php')){
		require 'controllers/'.$class.'.php';
	}
	else if(file_exists('models/'.$class.'.php')){
		require 'models/'.$class.'.php';
	}
	else if(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();
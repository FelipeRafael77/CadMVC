<?php
//Aqui ele vai dar inicio a "busca"
class Core {
	public function run(){
		
		$url = '/';
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}
		// fazendo agora o primeiro teste se algum comando para ir até uma pagina foi enviado pelo usuario
		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
			} else {
				$currentAction = 'index';
			} 

			print_r($url);
		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}
 		echo "CONTROLLER: ".$currentController."<br/>";
 		echo "ACTION: ". $currentAction."<br/>";
	}
}
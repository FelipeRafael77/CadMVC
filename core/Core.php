<?php
//Aqui ele vai dar inicio a "busca"
class Core {
	public function run(){
		
		$url = '/';
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}
		// fazendo agora o primeiro teste se algum comando para ir até uma pagina foi enviado pelo usuario

		$params = array();

		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			} 

			if(count($url) > 0){
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		//VAI INSTANCIAR UMA CLASSE CONTROLLER QUE ESTIVER NA VARIAVEL currentController
		$c = new $currentController();

		//serve para executar a action
		call_user_func_array(array($c, $currentAction), $params);

	}
}
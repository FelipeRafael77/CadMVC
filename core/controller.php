<?php
class controller {
	// vai carregar a view que usuario quer 
	public function loadView($viewName, $viewData = array()){
		extract($viewData);//pega os indices do array e transforma em variaaveis.
		require 'views/'.$viewName.'.php';
	}

	//vai carregar o template que contem a estrutura do site como exemplo o MENU.
	public function loadTemplate($viewName, $viewData = array()){
			require 'views/template.php';
	}
	//carrega a view no template
	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}
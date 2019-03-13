<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$u = new Usuarios();
	

		$total_usuarios = $u->getTotalUsuarios();
		$lista_u = $u->getAll();
		
		$dados['lista_u'] = $lista_u;
		$dados['total_usuarios'] = $total_usuarios;
		

		$this->loadTemplate('home', $dados);

	}

}
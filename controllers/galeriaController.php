<?php
class galeriaController extends controller{
	public function index(){
		$dados = array(
			'qt' => 50
		);

		$this->loadTemplate('galeria', $dados);
	}
}
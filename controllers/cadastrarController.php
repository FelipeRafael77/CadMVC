<?php

class cadastrarController extends controller {

    public function index() {

    $dados = array();

    $u = new Usuarios();
    if(isset($_POST['nome']) && !empty($_POST['nome'])) {

        $nome = addslashes($_POST['nome']);
        $cpf = addslashes($_POST['cpf']);
        $email = $_POST['email'];
        $telefone = addslashes($_POST['telefone']);

        if(!empty($nome) && !empty($cpf) && !empty($email)) {
            if($u->cadastrar($nome, $cpf, $email, $telefone)) {

                $dados['msg'] = '<div class="alert alert-success">
                    <strong>Parabéns!</strong> Cadastrado com sucesso. 
                </div>';

            } else {

                $dados['msg'] = '<div class="alert alert-warning">
                    Este usuário já existe! 
                </div>';
            }
        } else {
            $dados['msg'] = '<div class="alert alert-warning">
                Preencha todos os campos
            </div>';
         }

    }

        $this->loadTemplate('cadastrar',$dados);
    }
}
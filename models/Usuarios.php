<?php
class Usuarios extends model {

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function getAll() {
	    $sql = "SELECT id, nome, cpf, email, telefone FROM usuarios";
	    $sql = $this->db->query($sql);

	    if ($sql->rowCount() > 0) {
	        return $sql->fetchAll();
	    } else {
	        return array();
	    }
	}

	public function cadastrar($nome, $cpf, $email, $telefone) {
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, cpf = :cpf, email = :email, telefone = :telefone");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":cpf", $cpf);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":telefone", $telefone);
			$sql->execute();

			return true;

		} else {
			return false;
		}

	}
}
?>
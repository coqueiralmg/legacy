<?php

namespace app\models;
use \PDO;
class UsuarioDAO {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "usuario";
	}

	public function logar($login, $senha){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE (usuario=:usuario OR email=:email) AND senha=:senha AND ativo=:ativo");
			$find->bindValue(":usuario", $login, PDO::PARAM_STR);
			$find->bindValue(":email", $login, PDO::PARAM_STR);
			$find->bindValue(":senha", $senha, PDO::PARAM_STR);
			$find->bindValue(":ativo", 1, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Usuario");
			$find->execute();
			//return ($find->rowCount() == 1) ? $find->fetch() : null;
			$usuario = null;
			if($find->rowCount() == 1){
				$usuario = $find->fetch();
				$pessoaDAO = new \app\models\PessoaDAO();
				$usuario->setPessoa($pessoaDAO->buscarPeloId($usuario->getPessoa()));
			}
			return $usuario;
		} catch (\PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function inserir(\app\models\Usuario $usuario, $ativarTransaction=false){
		try{
			if($ativarTransaction) $this->conexao->beginTransaction();

			$pessoaDAO = new \app\models\PessoaDAO();
			$lastIdPessoa = $pessoaDAO->inserir($usuario->getPessoa());

			if(is_numeric($lastIdPessoa) && $lastIdPessoa > 0){
				$usuario->getPessoa()->setId($lastIdPessoa);
				$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (usuario, email, senha, ativo, nivel, pessoa) VALUES (:usuario, :email, :senha, :ativo, :nivel, :pessoa)");
				$inserir->bindValue(":usuario", $usuario->getUsuario(), PDO::PARAM_STR);
				$inserir->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
				$inserir->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);
				$inserir->bindValue(":ativo", $usuario->getAtivo(), PDO::PARAM_INT);
				$inserir->bindValue(":nivel", $usuario->getNivel(), PDO::PARAM_INT);
				$inserir->bindValue(":pessoa", $usuario->getPessoa()->getId(), PDO::PARAM_INT);
				$inserir->execute();
				$lastInsertId = $this->conexao->lastInsertId();
				if($ativarTransaction) $this->conexao->commit();
				return ($inserir->rowCount() == 1) ? $lastInsertId : -1;
			}

			if($ativarTransaction) $this->conexao->rollBack();
			return -1;

			
		}catch(PDOException $e){
			echo $e->getMessage();
			if($ativarTransaction) $this->conexao->rollBack();
			return -1;
		}
	}

	public function alterar(\app\models\Usuario $usuario, $ativarTransaction=false){
		try{
			if($ativarTransaction) $this->conexao->beginTransaction();

			$pessoaDAO = new \app\models\PessoaDAO();

			if($pessoaDAO->alterar($usuario->getPessoa())){
				$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET usuario=:usuario, email=:email, senha=:senha, ativo=:ativo, nivel=:nivel, pessoa=:pessoa WHERE id=:id");
				$alterar->bindValue(":usuario", $usuario->getUsuario(), PDO::PARAM_STR);
				$alterar->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
				$alterar->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);
				$alterar->bindValue(":ativo", $usuario->getAtivo(), PDO::PARAM_INT);
				$alterar->bindValue(":nivel", $usuario->getNivel(), PDO::PARAM_INT);
				$alterar->bindValue(":pessoa", $usuario->getPessoa()->getId(), PDO::PARAM_INT);
				$alterar->bindValue(":id", $usuario->getId(), PDO::PARAM_INT);
				$alterar->execute();
				if($ativarTransaction) $this->conexao->commit();
				return ($alterar->rowCount() >= 0) ? true : false;
			}

			if($ativarTransaction) $this->conexao->rollBack();
			return false;

		}catch(PDOException $e){
			echo $e->getMessage();
			if($ativarTransaction) $this->conexao->rollBack();
			return false;
		}
	}

	public function deletar($id, $ativarTransaction=false){
		try{
			if($ativarTransaction) $this->conexao->beginTransaction();
			$deletar = $this->conexao->prepare("DELETE FROM " . $this->tabela . " WHERE id=:id");
			$deletar->bindValue(":id", $id, PDO::PARAM_INT);
			$usuario = $this->buscarPeloId($id); // busca antes de deletar
			$deletar->execute();

			if($deletar->rowCount() == 1){
				$pessoaDAO = new \app\models\PessoaDAO();
				if($pessoaDAO->deletar($usuario->getPessoa()->getId())){
					if($ativarTransaction) $this->conexao->commit();
					return true;
				}
			}

			if($ativarTransaction) $this->conexao->rollBack();
			return false;

		}catch(PDOException $e){
			echo $e->getMessage();
			if($ativarTransaction) $this->conexao->rollBack();
			return false;
		}
	}

	public function buscar(){
		try {
			$all = $this->conexao->prepare("SELECT * FROM " . $this->tabela);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Usuario");
			$all->execute();

			$usuarios = null;
			if($all->rowCount() > 0){
				$usuarios = $all->fetchAll();
				$pessoaDAO = new \app\models\PessoaDAO();

				foreach ($usuarios as $usuario) {
					$usuario->setPessoa($pessoaDAO->buscarPeloId($usuario->getPessoa()));
				}
			}
			return $usuarios;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloId($id){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE id=:id");
			$find->bindValue(":id", $id, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Usuario");
			$find->execute();

			$usuario = null;

			if($find->rowCount() == 1){
				$usuario = $find->fetch();
				$pessoaDAO = new \app\models\PessoaDAO();
				$usuario->setPessoa($pessoaDAO->buscarPeloId($usuario->getPessoa()));
			}

			return $usuario;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function totalRegistros(){
		try {
			$find = $this->conexao->query("SELECT * FROM " . $this->tabela);
			return $find->rowCount();
		} catch (PDOException $e) {
			echo $e->getMessage();
			return -1;
		}
	}

}
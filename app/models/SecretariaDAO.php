<?php

namespace app\models;
use \PDO;
class SecretariaDAO implements \app\models\interfaces\iPagination {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "secretaria";
	}

	public function inserir(\app\models\Secretaria $secretaria){
		try{
			$this->conexao->beginTransaction();
			$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (nome, descricao, foto, email, telefone, secretario, ativo) VALUES (:nome, :descricao, :foto, :email, :telefone, :secretario, :ativo)");
			$inserir->bindValue(":nome", $secretaria->getNome(), PDO::PARAM_STR);
			$inserir->bindValue(":descricao", $secretaria->getDescricao(), PDO::PARAM_STR);
			$inserir->bindValue(":foto", $secretaria->getFoto(), PDO::PARAM_STR);
			$inserir->bindValue(":email", $secretaria->getEmail(), PDO::PARAM_STR);
			$inserir->bindValue(":telefone", $secretaria->getTelefone(), PDO::PARAM_STR);
			$inserir->bindValue(":secretario", $secretaria->getSecretario(), PDO::PARAM_STR);
			$inserir->bindValue(":ativo", $secretaria->getAtivo(), PDO::PARAM_INT);
			$inserir->execute();
			$lastInsertId = $this->conexao->lastInsertId();
			$this->conexao->commit();
			return ($inserir->rowCount() == 1) ? $lastInsertId : -1;
			
		}catch(PDOException $e){
			echo $e->getMessage();
			$this->conexao->rollBack();
			return -1;
		}
	}

	public function alterar(\app\models\Secretaria $secretaria){
		try{
			$this->conexao->beginTransaction();
			$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET nome=:nome, descricao=:descricao, foto=:foto, email=:email, telefone=:telefone, secretario=:secretario, ativo=:ativo WHERE id=:id");
			$alterar->bindValue(":nome", $secretaria->getNome(), PDO::PARAM_STR);
			$alterar->bindValue(":descricao", $secretaria->getDescricao(), PDO::PARAM_STR);
			$alterar->bindValue(":foto", $secretaria->getFoto(), PDO::PARAM_STR);
			$alterar->bindValue(":email", $secretaria->getEmail(), PDO::PARAM_STR);
			$alterar->bindValue(":telefone", $secretaria->getTelefone(), PDO::PARAM_STR);
			$alterar->bindValue(":secretario", $secretaria->getSecretario(), PDO::PARAM_STR);
			$alterar->bindValue(":ativo", $secretaria->getAtivo(), PDO::PARAM_INT);
			$alterar->bindValue(":id", $secretaria->getId(), PDO::PARAM_INT);
			$alterar->execute();
			$this->conexao->commit();
			return ($alterar->rowCount() >= 0) ? true : false;
		}catch(PDOException $e){
			echo $e->getMessage();
			$this->conexao->rollBack();
			return false;
		}
	}

	public function deletar($id){
		try{
			$this->conexao->beginTransaction();
			$deletar = $this->conexao->prepare("DELETE FROM " . $this->tabela . " WHERE id=:id");
			$deletar->bindValue(":id", $id, PDO::PARAM_INT);
			$deletar->execute();
			$this->conexao->commit();
			return ($deletar->rowCount() == 1) ? true : false;
		}catch(PDOException $e){
			echo $e->getMessage();
			$this->conexao->rollBack();
			return false;
		}
	}

	public function buscar($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT * FROM " . $this->tabela . $condition);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Secretaria");
			$all->execute();
			return ($all->rowCount() > 0) ? $all->fetchAll() : null;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloId($id){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE id=:id");
			$find->bindValue(":id", $id, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Secretaria");
			$find->execute();
			return ($find->rowCount() == 1) ? $find->fetch() : null;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function totalRegistros(){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE ativo=:ativo");
			$find->bindValue(":ativo", 1, PDO::PARAM_INT);
			return $find->rowCount();
		} catch (PDOException $e) {
			echo $e->getMessage();
			return -1;
		}
	}

	public function listar($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT * FROM {$this->tabela} WHERE ativo=:ativo ORDER BY RAND() " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Secretaria");
			$all->execute();
			return ($all->rowCount() > 0) ? $all->fetchAll() : null;			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function pesquisar($busca, $limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT * FROM {$this->tabela} WHERE ativo=:ativo AND nome LIKE :busca OR descricao LIKE :busca OR email LIKE :busca OR telefone LIKE :busca OR secretario LIKE :busca
											ORDER BY id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->bindValue(":busca", "%".$busca."%", PDO::PARAM_STR);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Secretaria");
			$all->execute();
			return ($all->rowCount() > 0) ? $all->fetchAll() : null;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function where($campo, $valor){
		try {
			$find = $this->conexao->prepare("SELECT * FROM {$this->tabela} WHERE {$campo}=:campo LIMIT 1 OFFSET 0");
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Secretaria");
			$find->bindValue(":campo", $valor, PDO::PARAM_STR);
			$find->execute();
			return ($find->rowCount() == 1) ? $find->fetch() : null;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
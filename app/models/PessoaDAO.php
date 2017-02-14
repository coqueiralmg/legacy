<?php

namespace app\models;
use \PDO;
class PessoaDAO {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "pessoa";
	}

	public function inserir(\app\models\Pessoa $pessoa){
		try{
			//$this->conexao->beginTransaction();
			$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (nome, apelido, dataNascimento) VALUES (:nome, :apelido, :dataNascimento)");
			$inserir->bindValue(":nome", $pessoa->getNome(), PDO::PARAM_STR);
			$inserir->bindValue(":apelido", $pessoa->getApelido(), PDO::PARAM_STR);
			$inserir->bindValue(":dataNascimento", $pessoa->getDataNascimento(), PDO::PARAM_STR);
			$inserir->execute();
			$lastInsertId = $this->conexao->lastInsertId();
			//$this->conexao->commit();
			return ($inserir->rowCount() == 1) ? $lastInsertId : -1;
		}catch(PDOException $e){
			echo $e->getMessage();
			//$this->conexao->rollBack();
			return -1;
		}
	}

	public function alterar(\app\models\Pessoa $pessoa){
		try{
			//$this->conexao->beginTransaction();
			$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET nome=:nome, apelido=:apelido, dataNascimento=:dataNascimento WHERE id=:id");
			$alterar->bindValue(":nome", $pessoa->getNome(), PDO::PARAM_STR);
			$alterar->bindValue(":apelido", $pessoa->getApelido(), PDO::PARAM_STR);
			$alterar->bindValue(":dataNascimento", $pessoa->getDataNascimento(), PDO::PARAM_STR);
			$alterar->bindValue(":id", $pessoa->getId(), PDO::PARAM_INT);
			$alterar->execute();
			//$this->conexao->commit();
			return ($alterar->rowCount() >= 0) ? true : false;
		}catch(PDOException $e){
			echo $e->getMessage();
			//$this->conexao->rollBack();
			return false;
		}
	}

	public function deletar($id){
		try{
			//$this->conexao->beginTransaction();
			$deletar = $this->conexao->prepare("DELETE FROM " . $this->tabela . " WHERE id=:id");
			$deletar->bindValue(":id", $id, PDO::PARAM_INT);
			$deletar->execute();
			//$this->conexao->commit();
			return ($deletar->rowCount() == 1) ? true : false;
		}catch(PDOException $e){
			echo $e->getMessage();
			//$this->conexao->rollBack();
			return false;
		}
	}

	public function buscar(){
		try {
			$all = $this->conexao->prepare("SELECT * FROM " . $this->tabela);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Pessoa");
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
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Pessoa");
			$find->execute();
			return ($find->rowCount() == 1) ? $find->fetch() : null;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
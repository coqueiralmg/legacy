<?php

namespace app\models;
use \PDO;
class LicitacaoDAO implements \app\models\interfaces\iPagination {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "licitacao";
	}

	public function inserir(\app\models\Licitacao $licitacao){
		try{
			$this->conexao->beginTransaction();
			$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (titulo, descricao, dataInicio, dataTermino, edital, ativo) VALUES (:titulo, :descricao, :dataInicio, :dataTermino, :edital, :ativo)");
			$inserir->bindValue(":titulo", $licitacao->getTitulo(), PDO::PARAM_STR);
			$inserir->bindValue(":descricao", $licitacao->getDescricao(), PDO::PARAM_STR);
			$inserir->bindValue(":dataInicio", $licitacao->getDataInicio(), PDO::PARAM_STR);
			$inserir->bindValue(":dataTermino", $licitacao->getDataTermino(), PDO::PARAM_STR);
			$inserir->bindValue(":edital", $licitacao->getEdital(), PDO::PARAM_STR);
			$inserir->bindValue(":ativo", $licitacao->getAtivo(), PDO::PARAM_STR);
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

	public function alterar(\app\models\Licitacao $licitacao){
		try{
			$this->conexao->beginTransaction();
			$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET titulo=:titulo, descricao=:descricao, dataInicio=:dataInicio, dataTermino=:dataTermino, edital=:edital, ativo=:ativo WHERE id=:id");
			$alterar->bindValue(":titulo", $licitacao->getTitulo(), PDO::PARAM_STR);
			$alterar->bindValue(":descricao", $licitacao->getDescricao(), PDO::PARAM_STR);
			$alterar->bindValue(":dataInicio", $licitacao->getDataInicio(), PDO::PARAM_STR);
			$alterar->bindValue(":dataTermino", $licitacao->getDataTermino(), PDO::PARAM_STR);
			$alterar->bindValue(":edital", $licitacao->getEdital(), PDO::PARAM_STR);
			$alterar->bindValue(":ativo", $licitacao->getAtivo(), PDO::PARAM_STR);
			$alterar->bindValue(":id", $licitacao->getId(), PDO::PARAM_INT);
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
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Licitacao");
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
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Licitacao");
			$find->execute();
			return ($find->rowCount() == 1) ? $find->fetch() : null;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function totalRegistros($somenteAtivos=false){
		$condition = ($somenteAtivos) ? "  WHERE ativo=:ativo" : "";
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . $condition . " ORDER BY ID DESC");
			$find->bindValue(":ativo", 1, PDO::PARAM_INT);
			$find->execute();
			return $find->rowCount();
		} catch (PDOException $e) {
			echo $e->getMessage();
			return -1;
		}
	}

	public function listar($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT * FROM {$this->tabela} WHERE ativo=:ativo ORDER BY id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Licitacao");
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
			$all = $this->conexao->prepare("SELECT * FROM {$this->tabela} WHERE ativo=:ativo AND (titulo like :busca OR descricao LIKE :busca) ORDER BY id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->bindValue(":busca", "%".$busca."%", PDO::PARAM_STR);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Licitacao");
			$all->execute();
			return ($all->rowCount() > 0) ? $all->fetchAll() : null;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
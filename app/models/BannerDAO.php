<?php

namespace app\models;
use \PDO;
class BannerDAO implements \app\models\interfaces\iPagination {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "banner";
	}

	public function inserir(\app\models\Banner $banner){
		try{
			$this->conexao->beginTransaction();
			$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (titulo, descricao, banner, ativo) VALUES (:titulo, :descricao, :banner, :ativo)");
			$inserir->bindValue(":titulo", $banner->getTitulo(), PDO::PARAM_STR);
			$inserir->bindValue(":descricao", $banner->getDescricao(), PDO::PARAM_STR);
			$inserir->bindValue(":banner", $banner->getBanner(), PDO::PARAM_STR);
			$inserir->bindValue(":ativo", $banner->getAtivo(), PDO::PARAM_INT);
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

	public function alterar(\app\models\Banner $banner){
		try{
			$this->conexao->beginTransaction();
			$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET titulo=:titulo, descricao=:descricao, banner=:banner, ativo=:ativo WHERE id=:id");
			$alterar->bindValue(":titulo", $banner->getTitulo(), PDO::PARAM_STR);
			$alterar->bindValue(":descricao", $banner->getDescricao(), PDO::PARAM_STR);
			$alterar->bindValue(":banner", $banner->getBanner(), PDO::PARAM_STR);
			$alterar->bindValue(":ativo", $banner->getAtivo(), PDO::PARAM_INT);
			$alterar->bindValue(":id", $banner->getId(), PDO::PARAM_INT);
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
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Banner");
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
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Banner");
			$find->execute();
			return ($find->rowCount() == 1) ? $find->fetch() : null;
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

	public function listar($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE ativo=:ativo ORDER BY RAND() " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Banner");
			$all->execute();
			return ($all->rowCount() > 0) ? $all->fetchAll() : null;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
<?php

namespace app\models;
use \PDO;
class LogDAO {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "log";
	}

	public function inserir(\app\models\Log $log){
		try{
			$this->conexao->beginTransaction();
			$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (usuario, data) VALUES (:usuario, :data)");
			$inserir->bindValue(":usuario", $log->getUsuario()->getId(), PDO::PARAM_INT);
			$inserir->bindValue(":data", $log->getData(), PDO::PARAM_STR);
			$inserir->execute();
			$lastInsertId = $this->conexao->lastInsertId();
			$this->conexao->commit();
			return ($inserir->rowCount() == 1) ? true : false;
		}catch(PDOException $e){
			echo $e->getMessage();
			$this->conexao->rollBack();
			return false;
		}
	}

	public function buscar(){
		try {
			$all = $this->conexao->prepare("SELECT * FROM " . $this->tabela);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Log");
			$all->execute();

			$logs = null;
			if($all->rowCount() > 0){
				$logs = $all->fetchAll();
				$usuarioDAO = new \app\models\UsuarioDAO();

				foreach ($logs as $log) {
					$log->setUsuario($usuarioDAO->buscarPeloId($log->getId()));
				}
			}
			return $logs;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloIdUsuario($idUsuario){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE usuario=:usuario ORDER BY data DESC");
			$find->bindValue(":usuario", $idUsuario, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Log");
			$find->execute();

			$log = null;

			if($find->rowCount() == 1){
				$log = $find->fetch();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$log->setUsuario($usuarioDAO->buscarPeloId($log->getUsuario()));
			}

			return $log;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarUltimoLogUsuario($idUsuario){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE usuario=:usuario ORDER BY data DESC LIMIT 1 OFFSET 1");
			$find->bindValue(":usuario", $idUsuario, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Log");
			$find->execute();

			$log = null;

			if($find->rowCount() == 1){
				$log = $find->fetch();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$log->setUsuario($usuarioDAO->buscarPeloId($log->getUsuario()));
			}

			return $log;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
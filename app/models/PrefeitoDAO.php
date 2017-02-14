<?php

namespace app\models;
use \PDO;
class PrefeitoDAO implements \app\models\interfaces\iPagination {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "prefeito";
	}

	public function inserir(\app\models\Prefeito $prefeito){
		try{
			$this->conexao->beginTransaction();

			$usuarioDAO = new \app\models\UsuarioDAO();
			$lastIdUsuario = $usuarioDAO->inserir($prefeito->getUsuario());

			if(is_numeric($lastIdUsuario) && $lastIdUsuario > 0){
				$prefeito->getUsuario()->setId($lastIdUsuario);
				$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (partido, tipo, usuario, foto, sobre, falecimento) VALUES (:partido, :tipo, :usuario, :foto, :sobre, :falecimento)");
				$inserir->bindValue(":partido", $prefeito->getPartido()->getId(), PDO::PARAM_INT);
				$inserir->bindValue(":tipo", $prefeito->getTipo()->getId(), PDO::PARAM_INT);
				$inserir->bindValue(":usuario", $prefeito->getUsuario()->getId(), PDO::PARAM_INT);
				$inserir->bindValue(":foto", $prefeito->getFoto(), PDO::PARAM_STR);
				$inserir->bindValue(":sobre", $prefeito->getSobre(), PDO::PARAM_STR);
				$pdoParam = ($prefeito->getFalecimento() == null) ? PDO::PARAM_NULL : PDO::PARAM_STR;
				$inserir->bindValue(":falecimento", $prefeito->getFalecimento(), $pdoParam);
				$inserir->execute();
				$lastInsertId = $this->conexao->lastInsertId();
				$this->conexao->commit();
				return ($inserir->rowCount() == 1) ? $lastInsertId : -1;
			}

			$this->conexao->rollBack();
			return -1;

			
		}catch(PDOException $e){
			echo $e->getMessage();
			$this->conexao->rollBack();
			return -1;
		}
	}

	public function alterar(\app\models\Prefeito $prefeito){
		try{
			$this->conexao->beginTransaction();

			$usuarioDAO = new \app\models\UsuarioDAO();

			if($usuarioDAO->alterar($prefeito->getUsuario())){
				$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET partido=:partido, tipo=:tipo, usuario=:usuario, foto=:foto, sobre=:sobre, falecimento=:falecimento WHERE id=:id");
				$alterar->bindValue(":partido", $prefeito->getPartido()->getId(), PDO::PARAM_INT);
				$alterar->bindValue(":tipo", $prefeito->getTipo()->getId(), PDO::PARAM_INT);
				$alterar->bindValue(":usuario", $prefeito->getUsuario()->getId(), PDO::PARAM_INT);
				$alterar->bindValue(":foto", $prefeito->getFoto(), PDO::PARAM_STR);
				$alterar->bindValue(":sobre", $prefeito->getSobre(), PDO::PARAM_STR);
				$pdoParam = ($prefeito->getFalecimento() == null) ? PDO::PARAM_NULL : PDO::PARAM_STR;
				$alterar->bindValue(":falecimento", $prefeito->getFalecimento(), $pdoParam);
				$alterar->bindValue(":id", $prefeito->getId(), PDO::PARAM_INT);
				$alterar->execute();
				$this->conexao->commit();
				return ($alterar->rowCount() >= 0) ? true : false;
			}

			$this->conexao->rollBack();
			return false;

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
			$prefeito = $this->buscarPeloId($id); // busca antes de deletar
			$deletar->execute();

			if($deletar->rowCount() == 1){
				$usuarioDAO = new \app\models\UsuarioDAO();
				if($usuarioDAO->deletar($prefeito->getUsuario()->getId())){
					$this->conexao->commit();
					return true;
				}
			}

			$this->conexao->rollBack();
			return false;

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
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Prefeito");
			$all->execute();

			$prefeitos = null;
			if($all->rowCount() > 0){
				$prefeitos = $all->fetchAll();

				$partidoDAO = new \app\models\PartidoDAO();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();

				foreach ($prefeitos as $prefeito) {
					$prefeito->setPartido($partidoDAO->buscarPeloId($prefeito->getPartido()));
					$prefeito->setUsuario($usuarioDAO->buscarPeloId($prefeito->getUsuario()));
					$prefeito->setTipo($tipoPrefeitoDAO->buscarPeloId($prefeito->getTipo()));
				}
			}
			return $prefeitos;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloId($id){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE id=:id");
			$find->bindValue(":id", $id, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Prefeito");
			$find->execute();

			$prefeito = null;

			if($find->rowCount() == 1){
				$prefeito = $find->fetch();

				$partidoDAO = new \app\models\PartidoDAO();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
				
				$prefeito->setPartido($partidoDAO->buscarPeloId($prefeito->getPartido()));
				$prefeito->setUsuario($usuarioDAO->buscarPeloId($prefeito->getUsuario()));
				$prefeito->setTipo($tipoPrefeitoDAO->buscarPeloId($prefeito->getTipo()));
			}

			return $prefeito;

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
			$all = $this->conexao->prepare("SELECT v.id, v.partido, v.tipo, v.usuario, v.foto, v.falecimento, v.sobre FROM {$this->tabela} as v 
											INNER JOIN usuario ON v.usuario = usuario.id
											WHERE usuario.ativo=:ativo
											ORDER BY RAND() " . $condition);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Prefeito");
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->execute();
			
			$prefeitos = null;
			if($all->rowCount() > 0){
				$prefeitos = $all->fetchAll();

				$partidoDAO = new \app\models\PartidoDAO();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();

				foreach ($prefeitos as $prefeito) {
					$prefeito->setPartido($partidoDAO->buscarPeloId($prefeito->getPartido()));
					$prefeito->setUsuario($usuarioDAO->buscarPeloId($prefeito->getUsuario()));
					$prefeito->setTipo($tipoPrefeitoDAO->buscarPeloId($prefeito->getTipo()));
				}
			}
			return $prefeitos;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function listarFalecidos($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->query("SELECT * FROM {$this->tabela} WHERE falecimento IS NOT NULL ORDER BY RAND() " . $condition);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Prefeito");
			$all->execute();
			
			$prefeitos = null;
			if($all->rowCount() > 0){
				$prefeitos = $all->fetchAll();

				$partidoDAO = new \app\models\PartidoDAO();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();

				foreach ($prefeitos as $prefeito) {
					$prefeito->setPartido($partidoDAO->buscarPeloId($prefeito->getPartido()));
					$prefeito->setUsuario($usuarioDAO->buscarPeloId($prefeito->getUsuario()));
					$prefeito->setTipo($tipoPrefeitoDAO->buscarPeloId($prefeito->getTipo()));
				}
			}
			return $prefeitos;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function pesquisar($busca, $limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT v.id, v.partido, v.tipo, v.usuario, v.foto, v.falecimento, v.sobre FROM {$this->tabela} as v 
											INNER JOIN usuario ON v.usuario = usuario.id
											INNER JOIN pessoa ON usuario.pessoa = pessoa.id
											WHERE usuario.ativo=:ativo
											AND v.sobre LIKE :busca OR usuario.email LIKE :busca OR pessoa.nome LIKE :busca OR pessoa.apelido LIKE :busca
											ORDER BY v.id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->bindValue(":busca", "%".$busca."%", PDO::PARAM_STR);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Prefeito");
			$all->execute();
			
			$prefeitos = null;
			if($all->rowCount() > 0){
				$prefeitos = $all->fetchAll();

				$partidoDAO = new \app\models\PartidoDAO();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();

				foreach ($prefeitos as $prefeito) {
					$prefeito->setPartido($partidoDAO->buscarPeloId($prefeito->getPartido()));
					$prefeito->setUsuario($usuarioDAO->buscarPeloId($prefeito->getUsuario()));
					$prefeito->setTipo($tipoPrefeitoDAO->buscarPeloId($prefeito->getTipo()));
				}
			}
			return $prefeitos;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function where($campo, $valor){
		try {
			$find = $this->conexao->prepare("SELECT v.id, v.partido, v.tipo, v.usuario, v.foto, v.falecimento, v.sobre FROM {$this->tabela} as v 
											INNER JOIN usuario ON v.usuario = usuario.id
											INNER JOIN tipoPrefeito ON v.tipo = tipoPrefeito.id
											INNER JOIN partido ON v.partido = partido.id
											WHERE usuario.ativo=:ativo
											AND {$campo}=:campo
											LIMIT 1 OFFSET 0");
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Prefeito");
			$find->bindValue(":ativo", 1, PDO::PARAM_INT);
			$find->bindValue(":campo", $valor, PDO::PARAM_STR);
			$find->execute();
			
			$prefeito = null;

			if($find->rowCount() == 1){
				$prefeito = $find->fetch();

				$partidoDAO = new \app\models\PartidoDAO();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
				
				$prefeito->setPartido($partidoDAO->buscarPeloId($prefeito->getPartido()));
				$prefeito->setUsuario($usuarioDAO->buscarPeloId($prefeito->getUsuario()));
				$prefeito->setTipo($tipoPrefeitoDAO->buscarPeloId($prefeito->getTipo()));
			}

			return $prefeito;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
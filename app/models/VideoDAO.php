<?php

namespace app\models;
use \PDO;
class VideoDAO implements \app\models\interfaces\iPagination {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "video";
	}

	public function inserir(\app\models\Video $video){
		try{
			$this->conexao->beginTransaction();

			$postDAO = new \app\models\PostDAO();
			$lastIdPost = $postDAO->inserir($video->getPost());

			if(is_numeric($lastIdPost) && $lastIdPost > 0){
				$video->getPost()->setId($lastIdPost);
				$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (video, post) VALUES (:video, :post)");
				$inserir->bindValue(":video", $video->getVideo(), PDO::PARAM_STR);
				$inserir->bindValue(":post", $video->getPost()->getId(), PDO::PARAM_INT);
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

	public function alterar(\app\models\Video $video){
		try{
			$this->conexao->beginTransaction();

			$postDAO = new \app\models\PostDAO();

			if($postDAO->alterar($video->getPost())){
				$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET video=:video, post=:post WHERE id=:id");
				$alterar->bindValue(":video", $video->getVideo(), PDO::PARAM_STR);
				$alterar->bindValue(":post", $video->getPost()->getId(), PDO::PARAM_INT);
				$alterar->bindValue(":id", $video->getId(), PDO::PARAM_INT);
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
			$video = $this->buscarPeloId($id); // busca antes de deletar
			$deletar->execute();

			if($deletar->rowCount() == 1){
				$postDAO = new \app\models\PostDAO();				
				if($postDAO->deletar($video->getPost()->getId())){
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
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Video");
			$all->execute();

			$videos = null;
			if($all->rowCount() > 0){
				$videos = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($videos as $video) {
					$video->setPost($postDAO->buscarPeloId($video->getPost()));
				}
			}
			return $videos;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloId($id){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE id=:id");
			$find->bindValue(":id", $id, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Video");
			$find->execute();

			$video = null;

			if($find->rowCount() == 1){
				$video = $find->fetch();
				$postDAO = new \app\models\PostDAO();
				$video->setPost($postDAO->buscarPeloId($video->getPost()));
			}

			return $video;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function totalRegistros($somenteAtivos=false){
		$condition = ($somenteAtivos) ? " INNER JOIN post ON {$this->tabela}.post = post.id WHERE post.ativo=:ativo" : "";
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . $condition);
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
			$all = $this->conexao->prepare("SELECT video.id, video.video, video.post 
											FROM {$this->tabela} INNER JOIN post ON {$this->tabela}.post = post.id 
											WHERE post.ativo=:ativo 
											ORDER BY video.id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Video");
			$all->execute();

			$videos = null;
			if($all->rowCount() > 0){
				$videos = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($videos as $video) {
					$video->setPost($postDAO->buscarPeloId($video->getPost()));
				}
			}
			return $videos;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function listarRandon($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT video.id, video.video, video.post 
											FROM {$this->tabela} INNER JOIN post ON {$this->tabela}.post = post.id 
											WHERE post.ativo=:ativo 
											ORDER BY RAND() " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Video");
			$all->execute();

			$videos = null;
			if($all->rowCount() > 0){
				$videos = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($videos as $video) {
					$video->setPost($postDAO->buscarPeloId($video->getPost()));
				}
			}
			return $videos;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function pesquisar($busca, $limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT video.id, video.video, video.post FROM {$this->tabela} 
											INNER JOIN post ON {$this->tabela}.post = post.id 
											WHERE post.ativo=:ativo 
											AND post.titulo LIKE :busca
											ORDER BY video.id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->bindValue(":busca", "%".$busca."%", PDO::PARAM_STR);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Video");
			$all->execute();
			
			$videos = null;
			if($all->rowCount() > 0){
				$videos = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($videos as $video) {
					$video->setPost($postDAO->buscarPeloId($video->getPost()));
				}
			}
			return $videos;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
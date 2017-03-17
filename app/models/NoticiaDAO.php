<?php

namespace app\models;
use \PDO;
class NoticiaDAO implements \app\models\interfaces\iPagination {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "noticia";
	}

	public function inserir(\app\models\Noticia $noticia){
		try{
			$this->conexao->beginTransaction();

			$postDAO = new \app\models\PostDAO();
			$lastIdPost = $postDAO->inserir($noticia->getPost());

			if(is_numeric($lastIdPost) && $lastIdPost > 0){
				$noticia->getPost()->setId($lastIdPost);
				$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (texto, foto, post) VALUES (:texto, :foto, :post)");
				$inserir->bindValue(":texto", $noticia->getTexto(), PDO::PARAM_STR);
				$inserir->bindValue(":foto", $noticia->getFoto(), PDO::PARAM_STR);
				$inserir->bindValue(":post", $noticia->getPost()->getId(), PDO::PARAM_INT);
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

	public function alterar(\app\models\Noticia $noticia){
		try{
			$this->conexao->beginTransaction();

			$postDAO = new \app\models\PostDAO();

			if($postDAO->alterar($noticia->getPost())){
				$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET texto=:texto, foto=:foto, post=:post WHERE id=:id");
				$alterar->bindValue(":texto", $noticia->getTexto(), PDO::PARAM_STR);
				$alterar->bindValue(":foto", $noticia->getFoto(), PDO::PARAM_STR);
				$alterar->bindValue(":post", $noticia->getPost()->getId(), PDO::PARAM_INT);
				$alterar->bindValue(":id", $noticia->getId(), PDO::PARAM_INT);
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
			$deletar->execute();

			if($deletar->rowCount() == 1){
				$postDAO = new \app\models\PostDAO();
				$noticia = $this->buscarPeloId($id);
				var_dump($noticia);
				if($postDAO->deletar($noticia->getPost()->getId())){
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
			$all = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " ORDER BY ID DESC " . $condition);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Noticia");
			$all->execute();

			$noticias = null;
			if($all->rowCount() > 0){
				$noticias = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($noticias as $noticia) {
					$noticia->setPost($postDAO->buscarPeloId($noticia->getPost()));
				}
			}
			return $noticias;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloId($id){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE id=:id");
			$find->bindValue(":id", $id, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Noticia");
			$find->execute();

			$noticia = null;

			if($find->rowCount() == 1){
				$noticia = $find->fetch();
				$postDAO = new \app\models\PostDAO();
				$noticia->setPost($postDAO->buscarPeloId($noticia->getPost()));
			}

			return $noticia;

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
			$all = $this->conexao->prepare("SELECT noticia.id, noticia.texto, noticia.foto, noticia.post 
											FROM {$this->tabela} INNER JOIN post ON {$this->tabela}.post = post.id 
											WHERE post.ativo=:ativo 
											ORDER BY post.dataPostagem DESC, noticia.id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Noticia");
			$all->execute();

			$noticias = null;
			if($all->rowCount() > 0){
				$noticias = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($noticias as $noticia) {
					$noticia->setPost($postDAO->buscarPeloId($noticia->getPost()));
				}
			}
			return $noticias;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function pesquisar($busca, $limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT noticia.id, noticia.texto, noticia.foto, noticia.post 
											FROM {$this->tabela} INNER JOIN post ON {$this->tabela}.post = post.id 
											WHERE post.ativo=:ativo 
											AND noticia.texto LIKE :busca OR post.titulo LIKE :busca
											ORDER BY noticia.id DESC " . $condition);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			$all->bindValue(":busca", "%".$busca."%", PDO::PARAM_STR);
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Noticia");
			$all->execute();
			
			$noticias = null;
			if($all->rowCount() > 0){
				$noticias = $all->fetchAll();
				$postDAO = new \app\models\PostDAO();

				foreach ($noticias as $noticia) {
					$noticia->setPost($postDAO->buscarPeloId($noticia->getPost()));
				}
			}
			return $noticias;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
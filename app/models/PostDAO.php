<?php

namespace app\models;
use \PDO;
class PostDAO {

	private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "post";
	}

	public function inserir(\app\models\Post $post){
		try{
			//$this->conexao->beginTransaction();
			$inserir = $this->conexao->prepare("INSERT INTO " . $this->tabela . " (titulo, dataPostagem, dataAlteracao, destaque, ativo, autor) VALUES (:titulo, :dataPostagem, :dataAlteracao, :destaque, :ativo, :autor)");
			$inserir->bindValue(":titulo", $post->getTitulo(), PDO::PARAM_STR);
			$inserir->bindValue(":dataPostagem", $post->getDataPostagem(), PDO::PARAM_STR);
			$inserir->bindValue(":dataAlteracao", $post->getDataAlteracao(), PDO::PARAM_STR);
			$inserir->bindValue(":destaque", $post->getDestaque(), PDO::PARAM_STR);
			$inserir->bindValue(":ativo", $post->getAtivo(), PDO::PARAM_STR);
			$inserir->bindValue(":autor", $post->getAutor()->getId(), PDO::PARAM_INT);
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

	public function alterar(\app\models\Post $post){
		try{
			//$this->conexao->beginTransaction();
			$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET titulo=:titulo, dataAlteracao=:dataAlteracao, destaque=:destaque, ativo=:ativo, autor=:autor WHERE id=:id");
			$alterar->bindValue(":titulo", $post->getTitulo(), PDO::PARAM_STR);
			//$alterar->bindValue(":dataPostagem", $post->getDataPostagem(), PDO::PARAM_STR);
			$alterar->bindValue(":dataAlteracao", $post->getDataAlteracao(), PDO::PARAM_STR);
			$alterar->bindValue(":autor", $post->getAutor()->getId(), PDO::PARAM_INT);
			$alterar->bindValue(":destaque", $post->getDestaque(), PDO::PARAM_INT);
			$alterar->bindValue(":ativo", $post->getAtivo(), PDO::PARAM_INT);
			$alterar->bindValue(":id", $post->getId(), PDO::PARAM_INT);
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
			$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Post");
			$all->execute();

			$posts = null;
			if($all->rowCount() > 0){
				$posts = $all->fetchAll();
				$usuarioDAO = new \app\models\UsuarioDAO();

				foreach ($posts as $post) {
					$post->setAutor($usuarioDAO->buscarPeloId($post->getAutor()));
				}
			}
			return $posts;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function buscarPeloId($id){
		try {
			$find = $this->conexao->prepare("SELECT * FROM " . $this->tabela . " WHERE id=:id");
			$find->bindValue(":id", $id, PDO::PARAM_INT);
			$find->setFetchMode(PDO::FETCH_CLASS, "\app\models\Post");
			$find->execute();

			$post = null;

			if($find->rowCount() == 1){
				$post = $find->fetch();
				$usuarioDAO = new \app\models\UsuarioDAO();
				$post->setAutor($usuarioDAO->buscarPeloId($post->getAutor()));
			}

			return $post;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function incrementaVisualizacao($id){
		try{
			$this->conexao->beginTransaction();
			$alterar = $this->conexao->prepare("UPDATE " . $this->tabela . " SET visualizacoes=(visualizacoes+:incremento) WHERE id=:id");
			$alterar->bindValue(":incremento", 1, PDO::PARAM_INT);
			$alterar->bindValue(":id", $id, PDO::PARAM_INT);
			$alterar->execute();
			$this->conexao->commit();
			return ($alterar->rowCount() >= 0) ? true : false;
		}catch(PDOException $e){
			echo $e->getMessage();
			$this->conexao->rollBack();
			return false;
		}
	}

	// verificar se este método ficaria na classe PostDAO mesmo
	public function buscarDestaques($limit=-1, $offset=-1){
		$condition = ($limit > -1 && $offset > -1) ? " LIMIT " . $limit . " OFFSET " . $offset : "";
		try {
			$all = $this->conexao->prepare("SELECT post.id, post.titulo, post.dataPostagem, post.dataAlteracao, post.visualizacoes, post.destaque, post.ativo, post.autor, 
											video.id as videoId, video.video as videoVideo, video.post as videoPost,
											noticia.id as noticiaId, noticia.texto as noticiaTexto, noticia.foto as noticiaFoto, noticia.post as noticiaPost
											FROM {$this->tabela} 
											LEFT JOIN video ON post.id = video.post
											LEFT JOIN noticia ON post.id = noticia.post
											WHERE post.destaque=:destaque AND post.ativo=:ativo
											ORDER BY post.id DESC 
											{$condition}");
			$all->bindValue(":destaque", 1, PDO::PARAM_INT);
			$all->bindValue(":ativo", 1, PDO::PARAM_INT);
			//$all->setFetchMode(PDO::FETCH_CLASS, "\app\models\Post");
			$all->setFetchMode(PDO::FETCH_OBJ);
			$all->execute();

			$destaques = array();
			if($all->rowCount() > 0){
				$posts = $all->fetchAll();
				$usuarioDAO = new \app\models\UsuarioDAO();

				foreach ($posts as $postDB) {

					// objeto post
					$post = new \app\models\Post();
					$post->setId($postDB->id);
					$post->setTitulo($postDB->titulo);
					$post->setDataPostagem($postDB->dataPostagem);
					$post->setDataAlteracao($postDB->dataAlteracao);
					$post->setVisualizacoes($postDB->visualizacoes);
					$post->setDestaque($postDB->destaque);
					$post->setAtivo($postDB->ativo);
					$post->setAutor($usuarioDAO->buscarPeloId($postDB->autor));

					// se for um video
					if($postDB->videoId != null){
						$video = new \app\models\Video();
						$video->setId($postDB->videoId);
						$video->setVideo($postDB->videoVideo);
						$video->setPost($post);
						$destaques[] = $video;
					// se for uma noticia
					}else if($postDB->noticiaId != null){
						$noticia = new \app\models\Noticia();
						$noticia->setId($postDB->noticiaId);
						$noticia->setTexto($postDB->noticiaTexto);
						$noticia->setFoto($postDB->noticiaFoto);
						$noticia->setPost($post);
						$destaques[] = $noticia;
					}
				}
			}

			return $destaques;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

}
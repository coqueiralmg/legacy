<?php

namespace app\models;

class Noticia {

	private $id;
	private $texto;
	private $foto;
	private $post;

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	public function getTexto(){
		return $this->texto;
	}
	
	public function setTexto($texto){
		$this->texto = $texto;
		return $this;
	}
	
	public function getFoto(){
		return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
		return $this;
	}
	
	public function getPost(){
		return $this->post;
	}
	
	public function setPost(\app\models\Post $post){
		$this->post = $post;
		return $this;
	}
	
	

}
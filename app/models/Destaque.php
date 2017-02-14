<?php

namespace app\models;

class Destaque {

	private $id;
	private $titulo;
	private $foto;
	private $link;
	private $ativo;

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function setTitulo($titulo){
		$this->titulo = $titulo;
		return $this;
	}
	
	public function getFoto(){
		return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
		return $this;
	}
	
	public function getLink(){
		return $this->link;
	}
	
	public function setLink($link){
		$this->link = $link;
		return $this;
	}

	public function getAtivo(){
		return $this->ativo;
	}
	
	public function setAtivo($ativo){
		$this->ativo = $ativo;
		return $this;
	}
	
	
	
}
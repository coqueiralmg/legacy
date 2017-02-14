<?php

namespace app\models;

class Banner {

	private $id;
	private $titulo;
	private $descricao;
	private $banner;
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
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
		return $this;
	}
	
	public function getBanner(){
		return $this->banner;
	}
	
	public function setBanner($banner){
		$this->banner = $banner;
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
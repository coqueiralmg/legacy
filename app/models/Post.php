<?php

namespace app\models;

class Post {

	private $id;
	private $titulo;
	private $dataPostagem;
	private $dataAlteracao;
	private $visualizacoes;
	private $destaque;
	private $ativo;
	private $autor;

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
	
	public function getDataPostagem(){
		return $this->dataPostagem;
	}
	
	public function setDataPostagem($dataPostagem){
		$this->dataPostagem = $dataPostagem;
		return $this;
	}
	
	public function getDataAlteracao(){
		return $this->dataAlteracao;
	}
	
	public function setDataAlteracao($dataAlteracao){
		$this->dataAlteracao = $dataAlteracao;
		return $this;
	}

	public function getVisualizacoes(){
		return $this->visualizacoes;
	}
	
	public function setVisualizacoes($visualizacoes){
		$this->visualizacoes = $visualizacoes;
		return $this;
	}

	public function getDestaque(){
		return $this->destaque;
	}
	
	public function setDestaque($destaque){
		$this->destaque = $destaque;
		return $this;
	}
	
	public function getAtivo(){
		return $this->ativo;
	}
	
	public function setAtivo($ativo){
		$this->ativo = $ativo;
		return $this;
	}
	
	public function getAutor(){
		return $this->autor;
	}
	
	public function setAutor(\app\models\Usuario $autor){
		$this->autor = $autor;
		return $this;
	}	

}
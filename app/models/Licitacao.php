<?php

namespace app\models;

class Licitacao {

	private $id;
	private $titulo;
	private $descricao;
	private $dataInicio;
	private $dataTermino;
	private $edital;
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
	
	public function getDataInicio(){
		return $this->dataInicio;
	}
	
	public function setDataInicio($dataInicio){
		$this->dataInicio = $dataInicio;
		return $this;
	}

	public function getDataTermino(){
		return $this->dataTermino;
	}
	
	public function setDataTermino($dataTermino){
		$this->dataTermino = $dataTermino;
		return $this;
	}
	
	public function getEdital(){
		return $this->edital;
	}
	
	public function setEdital($edital){
		$this->edital = $edital;
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
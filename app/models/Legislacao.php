<?php

namespace app\models;

class Legislacao {

	private $id;
	private $titulo;
	private $descricao;
	private $data;
	private $arquivo;
	private $numero;
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

	public function getData(){
		return $this->data;
	}
	
	public function setData($data){
		$this->data = $data;
		return $this;
	}
	
	public function getArquivo(){
		return $this->arquivo;
	}
	
	public function setArquivo($arquivo){
		$this->arquivo = $arquivo;
		return $this;
	}
	
	public function getNumero(){
		return $this->numero;
	}
	
	public function setNumero($numero){
		$this->numero = $numero;
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
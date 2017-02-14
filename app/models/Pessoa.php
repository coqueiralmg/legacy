<?php

namespace app\models;

class Pessoa {

	private $id;
	private $nome;
	private $apelido;
	private $dataNascimento;

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}

	public function getApelido(){
		return $this->apelido;
	}
	
	public function setApelido($apelido){
		$this->apelido = $apelido;
		return $this;
	}
	
	public function getDataNascimento(){
		return $this->dataNascimento;
	}
	
	public function setDataNascimento($dataNascimento){
		$this->dataNascimento = date("Y-m-d", strtotime($dataNascimento));
		return $this;
	}

}
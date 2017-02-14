<?php

namespace app\models;

class Partido {

	private $id;
	private $nome;
	private $sigla;
	private $logo;

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

	public function getSigla(){
		return $this->sigla;
	}
	
	public function setSigla($sigla){
		$this->sigla = $sigla;
		return $this;
	}
	
	public function getLogo(){
		return $this->logo;
	}
	
	public function setLogo($logo){
		$this->logo = $logo;
		return $this;
	}
	
	

}
<?php

namespace app\models;

class Secretaria {

	private $id;
	private $nome;
	private $descricao;
	private $foto;
	private $email;
	private $telefone;
	private $secretario;
	private $ativo;

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
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
		return $this;
	}

	public function getFoto(){
		return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
		return $this;
	}	
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
		return $this;
	}
	
	public function getTelefone(){
		return $this->telefone;
	}
	
	public function setTelefone($telefone){
		$this->telefone = $telefone;
		return $this;
	}
	
	public function getSecretario(){
		return $this->secretario;
	}
	
	public function setSecretario($secretario){
		$this->secretario = $secretario;
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
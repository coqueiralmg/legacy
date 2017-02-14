<?php

namespace app\models;

class Usuario {

	private $id;
	private $usuario;
	private $email;
	private $senha;
	private $ativo;
	private $nivel; // 1 - normal, 2 - admin
	private $pessoa;

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	public function getUsuario(){
		return $this->usuario;
	}
	
	public function setUsuario($usuario){
		$this->usuario = $usuario;
		return $this;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
		return $this;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
		return $this;
	}
	
	public function getAtivo(){
		return $this->ativo;
	}
	
	public function setAtivo($ativo){
		$this->ativo = $ativo;
		return $this;
	}

	public function getNivel(){
		return $this->nivel;
	}
	
	public function setNivel($nivel){
		$this->nivel = $nivel;
		return $this;
	}
	
	public function getPessoa(){
		return $this->pessoa;
	}
	
	public function setPessoa($pessoa){
		$this->pessoa = $pessoa;
		return $this;
	}

}
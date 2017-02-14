<?php

namespace app\models;

class Log {

	private $id;
	private $usuario;
	private $data;

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
	
	public function setUsuario(\app\models\Usuario $usuario){
		$this->usuario = $usuario;
		return $this;
	}
	
	public function getData(){
		return $this->data;
	}
	
	public function setData($data){
		$this->data = $data;
		return $this;
	}
	
	

}
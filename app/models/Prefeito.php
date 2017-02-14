<?php

namespace app\models;

class Prefeito {

	private $id;
	private $partido;
	private $tipo;
	private $usuario;
	private $foto;
	private $sobre;
	private $falecimento;

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	public function getPartido(){
		return $this->partido;
	}
	
	public function setPartido(\app\models\Partido $partido){
		$this->partido = $partido;
		return $this;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	
	public function setTipo(\app\models\TipoPrefeito $tipo){
		$this->tipo = $tipo;
		return $this;
	}
	
	public function getUsuario(){
		return $this->usuario;
	}
	
	public function setUsuario(\app\models\Usuario $usuario){
		$this->usuario = $usuario;
		return $this;
	}
	
	public function getFoto(){
		return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
		return $this;
	}

	public function getSobre(){
		return $this->sobre;
	}
	
	public function setSobre($sobre){
		$this->sobre = $sobre;
		return $this;
	}
	
	
	
	public function getFalecimento(){
		return $this->falecimento;
	}
	
	public function setFalecimento($falecimento){
		$this->falecimento = $falecimento;
		return $this;
	}	

}
<?php

namespace app\models;

class Concurso{
    
    private $id;
    private $titulo;
    private $descricao;
    private $dataInicioInscricao;
    private $dataFimInscricao;
    private $dataProva;
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

    public function getDataInicioInscricao(){
        return $this->dataInicioInscricao;
    }

    public function setDataInicioInscricao($dataInicioInscricao){
        $this->dataInicioInscricao = $dataInicioInscricao;
        return $this;
    }

    public function getDataFimInscricao(){
        return $this->dataFimInscricao;
    }

    public function setDataFimInscricao($dataFimInscricao){
        $this->dataFimInscricao = $dataFimInscricao;
        return $this;
    }

    public function getDataProva(){
        return $this->dataProva;
    }

    public function setDataProva($dataProva){
        $this->dataProva = $dataProva;
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
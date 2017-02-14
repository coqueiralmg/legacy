<?php

namespace app\models;

class Image {

	private $name;
	private $tmpName;
	private $extension;
	private $newName;
	private $load;
	private $availableExtensions = array("jpg", "png");
	private $folder;
	private $fullPath;

	public function getNewName(){
		return $this->newName;
	}
	
	public function setNewName($newName){
		$this->newName = $newName;
		return $this;
	}

	public function getExtension(){
		return $this->extension;
	}
	
	public function setExtension($extension){
		$this->extension = $extension;
		return $this;
	}

	public function getFolder(){
		return $this->folder;
	}
	
	public function setFolder($folder){
		$this->folder = $folder;
		return $this;
	}

	public function getFullPath(){
		return $this->folder . $this->newName;
	}

	public function __construct($name, $tmpName){
		$this->name = $name;
		$this->tmpName = $tmpName;

		// extension
		$auxExtension = explode(".", $this->name);
		$this->extension = strtolower(end($auxExtension));

		// new name
		$this->newName = uniqid() . "." . $this->extension;
	}

	public function resize($width, $height, $fit="outside", $scale="any"){
		$this->load = $this->load->resize($width, $height, $fit, $scale);
		return $this;
	}

	public function crop($positionLeft, $positionTop, $width, $height){
		$this->load = $this->load->crop($positionLeft, $positionTop, $width, $height);
		return $this;
	}

	public function saveToFile(){
		$this->load->saveToFile(ROOT . $this->folder . $this->newName);
		return $this;
	}

	public function validateExtension(){
		foreach ($this->availableExtensions as $extension) {
			if($extension == $this->extension){
				// se validou, seta o load
				$this->load = \WideImage\WideImage::load($this->tmpName);
				return true;
			}
		}
		return false;
	}

}
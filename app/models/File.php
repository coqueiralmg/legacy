<?php

namespace app\models;

class File {

	private $files = array();
	private $name;
	private $tmpName;
	private $availableExtensions;
	private $extension;
	private $newName;
	private $folder;
	private $fullPath;

	public function __construct(Array $files=array()){
		$this->files = $files;
		if(!empty($files)){
			$this->configure();
		}
	}

	public function getFiles(){
		return $this->files;
	}
	
	public function setFiles($files){
		$this->files = $files;
		$this->configure();
		return $this;
	}

	public function getNameWithoutExtension(){
		$nameExplode = explode(".", $this->name);
		return $nameExplode[0];
	}

	public function getAvailableExtensions(){
		return $this->availableExtensions;
	}
	
	public function setAvailableExtensions($availableExtensions){
		$this->availableExtensions = $availableExtensions;
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
	
	public function setFullPath($fullPath){
		$this->fullPath = $fullPath;
		return $this;
	}

	public function configure(){
		$this->name = $this->files["name"];
		$this->tmpName = $this->files["tmp_name"];

		// extension
		$auxExtension = explode(".", $this->name);
		$this->extension = strtolower(end($auxExtension));

		// new name
		$this->newName = uniqid() . "." . $this->extension;

		// available extensions
		$this->availableExtensions = array("pdf", "doc", "docx", "odt", "xls", "xlsx", "ods", "zip");
	}

	public function validateExtension(){
		foreach ($this->availableExtensions as $extension) {
			if($extension == $this->extension){
				// se validou
				return true;
			}
		}
		return false;
	}

	public function saveToFile(){
		return move_uploaded_file($this->tmpName, $this->getFullPath());
	}

}
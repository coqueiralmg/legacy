<?php

namespace app\models;

class Pagination {

	private $objectDAO;
	private $page;
	private $limit;
	private $offset;
	private $objects;
	private $lastPage;
	private $url;
	private $totalObjects;

	public function __construct($objectDAO, $limit=5, $page=1, $metodo="buscar", $somenteAtivos=false, $search=null){
		$this->objectDAO = $objectDAO;
		$this->page = $page;
		$this->limit = $limit;
		$this->offset = ($this->limit * $this->page) - $this->limit;
		$this->totalObjects = $this->objectDAO->totalRegistros($somenteAtivos);
		$this->objects = ($search == null) ? $this->objectDAO->$metodo($this->limit, $this->offset) : $this->objectDAO->$metodo($search, $this->limit, $this->offset) ;
		$round = ceil($this->totalObjects / $this->limit);
		$this->lastPage = ($round > 0) ? $round : 1;
	}

	public function getUrl(){
		return $this->url;
	}
	
	public function setUrl($url){
		$this->url = $url;
		return $this;
	}

	public function getTotalObjects(){
		return $this->totalObjects;
	}
	
	public function setTotalObjects($totalObjects){
		$this->totalObjects = $totalObjects;
		return $this;
	}
	
	public function updateLastPage(){
		$round = ceil($this->totalObjects / $this->limit);
		$this->lastPage = ($round > 0) ? $round : 1;
	}

	public function getLinks(){
		$links  = '<nav class="text-center">';
	  	$links .= '<ul class="pagination">';
	    $links .= '<li ' . (($this->page == 1) ? 'class="disabled"' : '') . '>';
	    $links .= '<a href="' . siteUrl() . $this->url . '/page/1/limit/' . $this->limit .  '" aria-label="Previous">';
	    $links .= '<span aria-hidden="true">&laquo;</span>';
	    $links .= '</a>';
	    $links .= '</li>';
	    for ($page=1; $page <= $this->lastPage; $page++) { 
	    	$links .= '<li ' . (($this->page == $page) ? 'class="active"' : '') .  '><a href="' . siteUrl() . $this->url . '/page/' . $page . '/limit/' . $this->limit .  '">' . $page .  '</a></li>';
	    }
	    $links .= '<li ' . (($this->page == $this->lastPage) ? 'class="disabled"' : '') . '>';
	    $links .= '<a href="' . siteUrl() . $this->url . '/page/' . $this->lastPage . '/limit/' . $this->limit .  '" aria-label="Next">';
	    $links .= '<span aria-hidden="true">&raquo;</span>';
	    $links .= '</a>';
	    $links .= '</li>';
	  	$links .= '</ul>';
		$links .= '</nav>';
		return $links;
	}

	public function getObjects(){
		return $this->objects;
	}

	public function getSelect(){
		$select  = '<select class="form-control">';
		$i = 0;
		while($i < 100){
			if($i < 20)
				$i += 5;
			else if ($i < 50)
				$i += 10;
			else
				$i += 25;
			$select .= '<option ' . (($i == $this->limit) ? 'selected' : '') . ' value="' . $i . '">' . $i . '</option>';
		}
		$select .= '</select>';
		return $select;
	}

}
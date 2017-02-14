<?php

namespace app\models;

class Video {

	private $id;
	private $video;
	private $post;

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	public function getVideo(){
		return $this->video;
	}
	
	public function setVideo($video){
		$this->video = $video;
		return $this;
	}
	
	public function getPost(){
		return $this->post;
	}
	
	public function setPost(\app\models\Post $post){
		$this->post = $post;
		return $this;
	}
	
	

}
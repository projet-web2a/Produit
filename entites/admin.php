<?php
class admin {
	private $id;
	private $mdp;
	private $cin;
	private $tel;

function __construct( $id, $mdp ,$cin,$tel ) {
		$this->id = $id;
		$this->mdp = $mdp;
		$this->cin = $cin;
		$this->tel = $tel;		
	}

function getid(){
	return $this->id;
}
function getmdp(){
	return $this->mdp;
}
function getcin(){
	return $this->cin;
}
function gettel(){
	return $this->tel;
}
}
?>
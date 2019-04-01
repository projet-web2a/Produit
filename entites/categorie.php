<?php
class categorie {
	private $refp;
	private $nom;
	


function __construct( $refp, $nom ) {
		$this->refp = $refp;
		$this->nom = $nom;
			
	}

function getrefp(){
	return $this->refp;
}
function getnom(){
	return $this->nom;
}
}
?>
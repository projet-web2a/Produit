<?php
class produit {
	private $refe;
	private $mar;
	private $dest;
	private $prix;
	private $qte;
	private $url;
	private $nC;
	private $descr;


function __construct( $refe, $mar, $dest, $prix ,$q ,$u,$nc ,$d ) {
		$this->refe = $refe;
		$this->mar = $mar;
		
		$this->dest = $dest;
		$this->prix = $prix;
		$this->qte = $q;
		$this->url = $u;
		$this->nC = $nc;
		$this->descr = $d;
	}

function getrefe(){
	return $this->refe;
}
function getnom(){
	return $this->nC;
}
function getmar(){
	return $this->mar;
}


function getdest(){
	return $this->dest;
}
function getprix(){
	return $this->prix;
}
function getqte(){
	return $this->qte;
}
function geturl(){
	return $this->url;
}
function getdescr(){
	return $this->descr;
}

}
?>
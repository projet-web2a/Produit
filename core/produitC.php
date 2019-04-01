<?php

require 'config.php';

class  produitC {
	


	function ajouterproduit($produit)
	{

 	$sql="INSERT INTO produit (refe,mar,dest,prix,qte,url,nomCat,descr) VALUES(:refe,:mar,:dest,:prix,:qte,:url,:n,:descr)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $refe=$produit->getrefe();
        $mar=$produit->getmar();
      
        $dest=$produit->getdest();
        $prix=$produit->getprix();
		$qte=$produit->getqte();
		$url=$produit->geturl();
		$nomCat=$produit->getnom();
		$descr=$produit->getdescr();
		$req->bindValue(':refe',$refe);
		$req->bindValue(':mar',$mar);
		
		$req->bindValue(':dest',$dest);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':url',$url);
		$req->bindValue(':n',$nomCat);
		$req->bindValue(':descr',$descr);
		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
function modifierproduit($produit,$refe)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE produit SET   mar=:mar ,  dest=:dest , prix=:prix , qte=:qte , url=:url, nomCat=:n , descr=:descr where refe=:refe";
 		try{

        $req=$db->prepare($sql);		
       
		$req->bindValue(':refe',$refe);
		$req->bindValue(':mar',$produit->getmar());
		
		$req->bindValue(':dest',$produit->getdest());
		$req->bindValue(':prix',$produit->getprix());
		$req->bindValue(':qte',$produit->getqte());
		$req->bindValue(':url',$produit->geturl());
		$req->bindValue(':n',$produit->getnom());
		$req->bindValue(':descr',$produit->getdescr());

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
		function recupererproduit($refe){
		$sql="SELECT * from produit where refe='$refe' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerproduit($refe){
		$sql="DELETE  from produit where refe='$refe' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherproduit()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM produit";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function trierproduitprix()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM produit order by prix";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierproduitqte()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM produit order by qte";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierproduitmar()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM produit order by mar";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierproduitref()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM produit order by refe";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$produit= $req->fetchALL(PDO::FETCH_OBJ);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}


?>
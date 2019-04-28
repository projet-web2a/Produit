<?php

require 'config.php';

class  categorieC {
	



	function ajoutercategorie($categorie)
	{

 	$sql="INSERT INTO categorie (refp,nom) VALUES(:ref,:mar)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $ref=$categorie->getrefp();
        $mar=$categorie->getnom();
      
       
		$req->bindValue(':ref',$ref);
		$req->bindValue(':mar',$mar);
		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
function modifiercategorie($categorie,$Refp)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE categorie SET   nom=:mar    where refp=:refp";
 		try{

        $req=$db->prepare($sql);		
       
		$req->bindValue(':refp',$Refp);
		$req->bindValue(':mar',$categorie->getnom());
		
		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
		function recuperercategorie($ref){
		$sql="SELECT * from categorie where refp='$ref' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
 		$categorie= $req->fetchALL(PDO::FETCH_OBJ);
		return $categorie;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimercategorie($ref){
		$sql="DELETE  from categorie where refp='$ref' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function affichercategorie()
	{
  		$db = config::getConnexion();
       		$sql="SELECT * FROM categorie";

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
	function ToTcat()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM categorie ");
        return $req1->rowCount();
    }
	
}


?>
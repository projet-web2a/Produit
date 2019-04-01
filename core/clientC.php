<?PHP
require 'config.php';
class ClientC{
	function ajouterClient($client){
		$sql="insert into client (prenom,nom,username,pwd,email,num,city,sexe) values (:prenom,:nom,:id,:p,:em,:n,:c,:s)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $prenom=$client->getPrenom();
		$nom=$client->getNom();
        $username=$client->getUsername();
		$pwd=$client->getPwd();
		$email=$client->getEmail();
		$num=$client->getNum();
		$city=$client->getCity();
		$sexe=$client->getSexe();
		
		
		
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':id',$username);
		$req->bindValue(':p',$pwd);
		$req->bindValue(':em',$email);
		$req->bindValue(':n',$num);
		$req->bindValue(':c',$city);
		$req->bindValue(':s',$sexe);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClient(){
		$db = config::getConnexion();
       		$sql="SELECT * FROM Client";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$client= $req->fetchALL(PDO::FETCH_OBJ);
		return $client;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
	
	function modifierClient($client,$Username)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE client SET  prenom=:prenom , nom=:nom ,  pwd=:pwd , email=:email , num=:num , city=:city , sexe=:sexe where username=:username";
 		try{

        $req=$db->prepare($sql);
		
        
		
		$req->bindValue(':prenom',$client->getPrenom());
		$req->bindValue(':nom',$client->getNom());
		$req->bindValue(':pwd',$client->getPwd());
		$req->bindValue(':email',$client->getEmail());
		$req->bindValue(':num',$client->getNum());
		$req->bindValue(':city',$client->getCity());
		$req->bindValue(':sexe',$client->getSexe());
        $req->bindValue(':username',$Username);
		
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function recupererClient($user){
		
		$sql="SELECT * FROM client WHERE username = '$user' ";
	$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
 		$client= $req->fetchALL(PDO::FETCH_OBJ);
		return $client;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
	function SupprimerClient($user){
		$sql="DELETE  FROM client WHERE username= '$user' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>
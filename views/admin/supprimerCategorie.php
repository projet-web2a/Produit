<?PHP
require 'C:/wamp64/www/Projet2eme/core/catergorieC.php';

$ref=$_GET["refp"];
$categoC= new categorieC();
	$categoC->Supprimercategorie($ref);
	header('Location: categorie_v.php');


?>
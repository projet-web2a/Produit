<?PHP
require '../../core/catergorieC.php';

$ref=$_GET["cin"];
$categoC= new categorieC();
	$categoC->Supprimercategorie($ref);
	header('Location: categorie_v.php');


?>
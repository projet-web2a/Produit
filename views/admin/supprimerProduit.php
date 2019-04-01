<?PHP
require 'C:/wamp64/www/Projet2eme/core/produitC.php';
$produitC=new produitC();
if (isset($_GET["refe"])){
	$produitC->supprimerproduit($_GET["refe"]);
	//header('Location: afficherEmploye.php');
	echo "<script type='text/javascript'>";
echo "alert('Supprimer avec success!');
window.location.href='../admin/produit_v.php';";
	echo "</script>";
}

?>
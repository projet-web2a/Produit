 <?php
require '../entites/categorie.php';
require 'catergorieC.php';
 
if ( isset($_POST['refe']) && isset($_POST['nomc']) )
{
 	$ref=$_POST['refe'];
 	$mar=$_POST['nomc'];
 	if ($ref=="" or $mar=="")
	{	
		
	echo "<script type='text/javascript'>";
echo "alert('HAHAHA no no no Empty Fields PLS!');
window.location.href='../views/admin/categorie_ajout.html';";
echo "</script>";
		exit;
	}
    $len = new categorie($ref, $mar );
$lc= new categorieC();
$lc->ajoutercategorie($len);
echo "Ajouter avec succes " ;  
}else{
	echo"erreur";
}
 ?>
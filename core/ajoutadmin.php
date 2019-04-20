 <?php
require '../entites/admin.php';
require 'adminC.php';
 
if ( isset($_POST['id']) && isset($_POST['mdp']) && isset($_POST['tel']) && isset($_POST['cin']) )
{
 	$ref=$_POST['id'];
 	$mar=$_POST['mdp'];
	$x=$_POST['tel'];
	$x1=$_POST['cin'];

    $len = new admin($ref, $mar ,$x1,$x);
$lc= new adminC();
$lc->ajouteradmin($len);
echo "Ajouter avec succes " ;  
}else{
	echo"erreur";
}
 ?>
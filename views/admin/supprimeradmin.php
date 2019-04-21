<?PHP
require '../../core/AdminC.php';

$ref=$_GET["cin"];
$categoC= new adminC();
	$categoC->Supprimeradmin($ref);
	header('Location: admin_v.php');


?>
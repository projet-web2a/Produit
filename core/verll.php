<?php
include_once 'AdminC.php';
	if(isset($_POST['login']) && isset($_POST['password']))
{
	$adminC = new adminC();
	$result = $adminC->verifierLogin($_POST['login'],$_POST['password']);
	if($result->count==0)
	{
		echo "nnnnnnnooooooooooo";
		
	}
	else
	{
		session_start();
		$_SESSION['login'] = $result->id;
		$_SESSION['mdp'] = $result->mdp;
		$currentUrl = $_SESSION['currentURL'];
		echo "yesssssssssssss";
		header("location:../views/admin/index.php?action=yes"); 
	}

}
else
{
	header("location:../views/back/login.php?err=champs");
}



 ?>
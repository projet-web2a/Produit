<?php
require "../core/employec.php";
require "../entite/employe.php";
$employe=new employe(22,"yessine","ayadi",3,6);
$employec=new employec();
$employec->afficher($employe);

?>
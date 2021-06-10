<?php
require 'Employe.class.php';
$employe= new Employe();
$employe ->setNom("insaf");
$employe ->setPrenom("boulahia");
$employe ->setdatEmbauche("14/04/2000");
$employe ->setSalaire("3000");
$employe ->setservice("commercial");
var_dump($employe);
echo"<p>".$employe->getanciennete()."</p>"
?>
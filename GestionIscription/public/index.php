<?php
require_once("../vendor/autoload.php");
//namespace=>repertoire virtuel utiliser pour ranger les classe
//namespace Model => ranger les classes models

use App\Core\DataBase;
use App\Model\User;

//namespace Controllers => ranger les classes controllers 
$rp=new User ;
$rp->setId(1);
$rp->setLogin("pabass");
$rp->setPassword("1234");
echo $rp->getId();
$rp->setId(1); 
$db=new DataBase; 
$db->openConnexion(); 

echo("bonjour");

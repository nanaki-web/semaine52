<?php
require_once "./Employe.class.php";

$oEmploye = new Employe('MARTIN','Gilbert','12/07/2015','secrétaire',30000,'secteur');
// var_dump($oEmploye->getDateEmbauche());
// var_dump($oEmploye->getSalaire());
// var_dump($oEmploye->calculerPrime());
var_dump($oEmploye->getAnciennete());

var_dump($oEmploye); 

$oEmploye = new Employe('Wilga','Anne','12/06/2000','patronne',100000,'informatique');
var_dump($oEmploye);
$oEmploye = new Employe('Wilga','Martin','12/06/2015','preparateur de commande',50000,'logitique');
var_dump($oEmploye);
$oEmploye = new Employe('Wilga','kevin','12/06/2019','agent de sécurité',50000,'sécurité');
var_dump($oEmploye);
$oEmploye = new Employe('Wilga','Némésis','12/06/1995','Bras Droit',80000,'Informatique');

var_dump($oEmploye);



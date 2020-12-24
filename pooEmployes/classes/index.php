<?php
require_once "./Employe.class.php";

// $oEmploye1 = new Employe('MARTIN','Gilbert','12/07/2015','secrétaire',30000,'secteur');
// var_dump($oEmploye->getDateEmbauche());
// var_dump($oEmploye->getSalaire());
// var_dump($oEmploye->calculerPrime());
// var_dump($oEmploye1->getAnciennete());

// var_dump($oEmploye1); 

// $oEmploye2 = new Employe('Wilga','Anne','12/06/2000','patronne',100000,'informatique');
// var_dump($oEmploye2);
// $oEmploye3 = new Employe('Wilga','Martin','12/06/2015','preparateur de commande',50000,'logitique');
// // var_dump($oEmploye3);
// $oEmploye4 = new Employe('Wilga','kevin','12/06/2019','agent de sécurité',50000,'sécurité');
// // var_dump($oEmploye4);
// $oEmploye5 = new Employe('Wilga','Némésis','12/06/1995','Bras Droit',80000,'Informatique');

// // var_dump($oEmploye5);

// employe::methodeStatique();


$emp = new Employe();
$emp2 = new Employe();

$employe=[];

            $emp->setNom("wilga");
            $emp->setPrenom("Anne");
            $emp->setDateEmbauche("12/07/2018");
            $emp->setFonction("dw");
            $emp->setSalaire("75000");
            $emp->setService("info");
            array_push($employe,$emp);

            $emp2->setNom("wilga");
            $emp2->setPrenom("Nemesis");
            $emp2->setDateEmbauche("22/04/2005");
            $emp2->setFonction("dw");
            $emp2->setSalaire("70000");
            $emp2->setService("info");
            array_push($employe,$emp2);
            
           
            



            var_dump($employe);
echo "<br><br>";

            asort($employe);
            var_dump($employe);




            // echo $emp2 ->getNom()," " ,$emp2->getPrenom()," ",$emp2->getFonction()," ",$emp2->getSalaire()," ",$emp2->getService(),"<br>";
            // echo $emp ->getNom()," " ,$emp->getPrenom()," ",$emp->getFonction()," ",$emp->getSalaire()," ",$emp->getService();


           







                // function tri_employe($emp, $emp2)
                // {
                // return strcmp($emp->getPrenom(), $emp2->getPrenom());
                // var_dump($emp2);
                // var_dump($emp);
                // }
              
                
                // asort($tabEmploye,'tri_employe');
                
               



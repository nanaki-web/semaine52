<?php

class Employe
{
    Private $_nom;
    Private $_prenom;
    Private $_dateEmbauche ;
    Private $_fonction;
    Private $_salaire;
    Private $_service;
    private $_anciennete;
    // private $_prime;

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setNom($sNom) 
    {
        return $this->_nom = $sNom;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getNom() 
    {
        return $this->_nom;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setPrenom($sPrenom) 
    {
    return $this->_prenom = $sPrenom;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getPrenom() 
    {
        return $this->_prenom;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    
    public function setDateEmbauche($sDateEmbauche) 
    {
        $_dateEmbauchestock = explode("/", $sDateEmbauche);
        $this->_dateEmbauche = date_create($_dateEmbauchestock[2]."-".$_dateEmbauchestock[1]."-".$_dateEmbauchestock[0]);
         
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getDateEmbauche() 
    {
        $_dateEmbauchestock = explode("-",  $this->_dateEmbauche->format('Y-m-d'));
        $this->_dateEmbauche = $_dateEmbauchestock[2]."/".$_dateEmbauchestock[1]."/".$_dateEmbauchestock[0];

        return DateTime::createFromFormat("d/m/Y",$this->_dateEmbauche);
           
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setFonction($sFonction) 
    {
    return $this->_fonction = $sFonction;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getFonction() 
    {
        return $this->_fonction;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setSalaire($sSalaire) 
    {
    return $this->_salaire = $sSalaire;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getSalaire() 
    {
        return $this->_salaire;
    }

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setService($sService) 
    {
    return $this->_service = $sService;
    }

    // Accesseur : renvoie la valeur d'un attribut  
    public function getService() 
    {
        return $this->_service;
    }


        function __construct($nom,$prenom,$dateEmbauche,$fonction,$salaire,$service) 
        {
            $_dateEmbauchestock = explode("/", $dateEmbauche);
            

            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateEmbauche = date_create($_dateEmbauchestock[2]."-".$_dateEmbauchestock[1]."-".$_dateEmbauchestock[0])->format('Y-m-d');
            $this->_fonction = $fonction;
            $this->_salaire = $salaire;
            $this->_service=$service;
            $this->_anciennete= $this->getAnciennete();
            //  $this->_prime = $this -> calculerPrime() ;
        }

   public function getAnciennete()
   {
        $datetime1 = $this->_dateEmbauche;
        $datetime2 = date("Y-m-d");


        $interval = date_diff(date_create($datetime1->format('Y-m-d')), date_create($datetime2));
    
        return (int)$interval->format('%y');
   }

//    public function calculerPrime ()
//    {
//     return $_prime = (($salaire * 5)/100) + ((2*$_anciennete)/100) ;
//    }
}






?>
<?PHP
class Employe{
    public $_nom;
    public $_prenom;
    public $_datEmbauche;
    public $_salaire;
    public $_service;

// Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setNom($sNom) 
    {
       return $this->_nom =$sNom ;
    }

    public function setPrenom($sPrenom)
    {
       return $this->_prenom = $sPrenom;
    }

    public function setDatEmbauche($sDatEmbauche)
    {
       return $this->_datEmbauche = DateTime::createFromFormat('m/d/Y',$sDatEmbauche);
    }  

    public function setSalaire($sSalaire)
    {
       return $this->_salaire = $sSalaire;

    }

    public function setService($sService)
    {
       return $this->_service = $sService;

    }

// Accesseur : renvoie la valeur d'un attribut  
    
public function getNom() 
{
    return $this->_nom;
}

public function getPrenom() 
{
    return $this->_prenom;
}
public function getDatEmbauche() 
{
    return $this->_datEmbauche;
}

public function getSalaire() 
{
    return $this->_salaire;
}

public function getService() 
{
    return $this->_service;
}
//Méthode pour savoir combien d'année un salarié est dans l'entreprise


public function getanciennete(){
    $todaye= new datetime();
    $dat_embauche= $this->getDatEmbauche();
    $year= $todaye->format('Y')-$dat_embauche->format('Y');
    return($year);
    echo $year;

}


}



?>
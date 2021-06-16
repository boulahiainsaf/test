<?PHP

class Employe extends  Agence
{
    public $_nom;
    public $_prenom;
    public $_dateEmbauche;
    public $_fonction;
    public $_salaire;
    public $_service;
    public $_nom_ag;


    public function setNom($sNom)
    {
        $this->_nom = $sNom;
    }

    public function setPrenom($sPrenom)
    {
        $this->_prenom = $sPrenom;
    }

    public function setDateEmbauche($sDatEmbauche)
    {

        $this->_dateEmbauche = DateTime::createFromFormat('d/m/Y', $sDatEmbauche);
    }

    public function setFonction($sFonction)
    {
        $this->_fonction = $sFonction;

    }

    public function setSalaire($sSalaire)
    {
        $this->_salaire = $sSalaire;

    }

    public function setService($sService)
    {
        $this->_service = $sService;

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

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function getFonction()
    {
        return $this->_fonction;

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


    public function getAnciennete()
    {
        $todaye = new datetime();
        $dat_embauche = $this->getDateEmbauche();
        $year = $todaye->format('Y') - $dat_embauche->format('Y');
        return ($year);


    }

    public function calculerPrime()
    {
        $prime = (0.05 * $this->_salaire) + ( ($this->getAnciennete()) *( 0.02 *($this->_salaire)));
        $today = new datetime();
        if (($today->format('D') == 31) && ($today->format('M') == 11)) {
            echo "votre prime de " . $prime . "  a été envoyé à la banque .";

        }
        return $prime;
    }



}

?>
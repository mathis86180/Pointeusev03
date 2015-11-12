<?php

namespace PointeuseV03;

Class PointeuseBase{
    protected $_débutPointage;
    protected $_finPointage;
    protected $_heuresCumulées;

    public function getHeuresCumulées()
    {
        return $this->_heuresCumulées;
    }

    public function setHeuresCumulées($heuresCumulées)
    {
        $this->_heuresCumulées = $heuresCumulées;
    }

    public function getFinPointage()
    {
        return $this->_finPointage;
    }

    public function setFinPointage($finPointage)
    {
        $this->_finPointage = $finPointage;
    }


    public function __construct(){

    }

    public function badger($heure = false){
        if($this->_débutPointage != null){
            echo "Erreur, vous essayer de badger sans avoir débadgé.";
        }
        else{
            if (!$heure){
                $heure = date("G:i:s");
            }
            $this->_débutPointage = strtotime($heure);
            $this->_heuresCumulées = null ;
            echo "Vous avez badgé à ".$heure."</br>";
        }
    }

    public function debadger($heure = false){
        if($this->_débutPointage == null){
            echo "Erreur, vous essayer de débadger sans avoir badgé.";
        }
        else{
            if (!$heure){
                $heure = date("G:i:s");
            }
            $this->_heuresCumulées += strtotime($heure) - $this->_débutPointage;
            $this->_débutPointage = null;
            echo "Vous avez débadgé à :". $heure."</br>";
        }
    }

    public function heuresCumulées(){
        if($this->_heuresCumulées != null){
            $totalsecondes = $this->_heuresCumulées;
            $heures = (int)($totalsecondes / 3600);
            $minutes = (int)($totalsecondes / 60 - $heures * 60);
            $secondes = $totalsecondes - $minutes * 60 - $heures * 3600;
            $resultat = array("total" => $totalsecondes, "h" => $heures, "m" => $minutes, "s" => $secondes);
            return $resultat;
        }
    }
}

?>
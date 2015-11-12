<?php

namespace PointeuseV03;

Class PointeuseNiveau1 extends PointeuseBase{

    public function risque(){
        if($this->heuresCumulées()["h"] >= 11){
            echo "Votre temps de travail est très élévé. Vous devriez vous reposer.";
        }
        else{
            echo "Votre temps de travail est bon. Ne déppassez pas 12 heures à la suite.";
        }
    }
}
?>
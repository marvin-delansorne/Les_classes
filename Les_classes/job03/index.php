<?php

class Personne{
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function sePresenter(){
         echo "Je suis $this->nom $this->prenom";
    }

}

$maPersonne = new Personne("John", "Doe <br>");
echo $maPersonne->sePresenter();
$maPersonne = new Personne("Jean", "Dupond <br>");
echo $maPersonne->sePresenter();
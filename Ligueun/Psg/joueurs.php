<?php

namespace Ligueun\Psg\joueurs;
class Brele {

     public string $nom;
     public string $surnom;
 
     public function __construct(string $nom, string $surnom) {
         $this->nom = $nom;
         $this->surnom = $surnom;
         echo "les bouffeurs de croissants </br>";
     }
 
     public function getNom() {
          return $this->nom;
     }
 
     public function setNom($nom) {
          $this->nom = $nom;
     }
 
     public function getSurnom() {
          return $this->surnom;
     }
 
     public function setSurnom($surnom) {
          $this->surnom = $surnom;
     }
 
     public function __toString() {
         return "$this->nom </br> dit $this->surnom </br>";
     }

}
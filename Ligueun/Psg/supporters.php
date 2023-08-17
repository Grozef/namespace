<?php

namespace Ligueun\Psg\supporters;

class Beauf {

    public string $nom;
    public int $nombre;
    public string $couleur;

    public function __construct(string $nom, int $nombre, string $couleur) {
        $this->nom = $nom;
        $this->nombre = $nombre;
        $this->couleur = $couleur;
        echo "</br> les idiots </br>";
    }

    public function getNom()
    {
         return $this->nom;
    }

    public function setNom($nom)
    {
         $this->nom = $nom;
    }

    public function getNombre()
    {
         return $this->nombre;
    }

    public function setNombre($nombre)
    {
         $this->nombre = $nombre;
    }

    public function getCouleur()
    {
         return $this->couleur;
    }

    public function setCouleur($couleur)
    {
         $this->couleur = $couleur;
    }

    public function __toString() {
        return "$this->nom </br> au nombre de $this->nombre </br> $this->couleur </br> ";
    }
}

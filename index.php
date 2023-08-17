<?php

require_once "Bundesliga\Bayernmunshen\joueurs.php";
require_once "Ligueun\Psg\joueurs.php";
require_once "Ligueun\Psg\supporters.php";

use Bundesliga\Bayernmunshen\joueurs\Joueur;
use Ligueun\Psg\joueurs\Brele;
use Ligueun\Psg\supporters\beauf;

$chevre = new Joueur("Ribery", "Mobylette");
echo $chevre;

$chevrette = new Joueur("Schweinsteiger","le chevaucheur de cochon" );
echo $chevrette;

echo "</br>";

$parti = new Brele ("Neymar", "l'amputé");
echo $parti;

$mba = new Brele ("Mbappé", "Grosse Noisette");
echo $mba;

$beauf = new beauf ("Auteuil", 2, "rouge et bleu");
echo $beauf;
<?php
$fichier = fopen("questions.qs", "r" );//ouvrir le fichier
$lignes=file("questions.qs");//lire le fichier

$themes = "##";// créer une variable pour les themes
$questions = "#";//creer une variable pour les questions
$reponses = array();//creer un tableau pour les reponses

foreach ($lignes as $lignenum => $lignecontent) { // parcourir le tableau et transformer les lignes en numero

    if (substr($lignecontent, 0, 2) == "##") {
        // On reinitialise les variables quand on detecte un nouveau theme
        $questions = "";
        $reponses = array();
        echo "\n";// pour afficher

        $themes = $lignecontent;//pour detecter les themes
        echo $themes . "\n";//afficher les themes
    }

    elseif ($lignecontent[0] == '#' and $lignecontent[1] != '#') {
        // On reinitialise notre variable possibilité quand on detecte une nouvelle question
        $reponses = array();
        echo "\n";//affiche les reponses

        $questions = $lignecontent;
        echo $questions . "\n";//affiche les questions
    }

    elseif ($lignecontent[0] == '-')//detecte les reponses
    {
        $reponses[] = $lignecontent;
//        echo $lignecontent . "\n";//affiche les reponses
    }
}
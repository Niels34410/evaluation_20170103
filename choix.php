<?php
//foreach($_POST['choix'] as $valeur){
//echo '<p>',"La radio $valeur a été cochée<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';
//fputs($fp, '<p>La radio $valeur a été cochée<br><section id=heure>$heure =date("H:i")</section></p>');
//fputs($fp, $valeur);
//}
//foreach($_POST['texte'] as $value){
//echo '<p>',"La box, $value a été écrite<br>", '<section id=heure>',$heure =date("H:i"),'</section>','</p>';
//fputs($fp, '<p>La box $value a été écrite<br> <section id=heure>$heure =date("H:i")</section></p>');
//  }
foreach($_POST as $key => $value)
{
    echo $key . '<p>'," réponse : $value<br>",'</p>';
}
?>
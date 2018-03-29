<?php
session_start();
require('connection.php');
//Reception des donnes du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adress= $_POST['adress'];
echo "Votre prenom est:".$prenom.   "<br>Votre nom est :".$nom. "Votre adress est:".$adress.;
$insert= $db->prepare("INSERT INTO Employer(nom, prenom,ville, adress, code) VALUES(?,?,?,?,?)");
$insert->execute(array($nom,$prenom, $ville, $adress, $code));


 header('Location:formulaire.php');




?> 
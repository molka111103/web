<?php
header('Access-Control-Allow-Origin: *');
include "functions.php";


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$cin= $_POST['cin'];
$email= $_POST['email'];
$tel= $_POST['tel'];
$prix= $_POST['prix'];
$note= $_POST['note'];
ajout_res($nom,$prenom,$cin,$email,$tel,$prix,$note);



?>


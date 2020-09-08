<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

$id = $_GET['id'];
$prenom =  $_GET['prenom'];
$nom =  $_GET['nom'];
$mail = $_GET['mail'];
$password = $_GET['password'];
?>

<h1>You have updated your info <?php echo $UserTable['name_user']. " " ?></h1>
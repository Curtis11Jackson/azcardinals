<?php
require 'view/header.php';
require 'identifier.php';
require './autoloadclass.php';

$email = $_POST["email"];
$password = $_POST["password"];

$reponse = $db->query("SELECT * FROM users WHERE email_user='". $email. "'");
// var_dump($reponse);
$donnees = $reponse->fetch();
// echo var_dump($donnees);
if ($donnees != false) {
    $reponse2 = $db->query("SELECT * FROM users WHERE email_user='" . $email. "' AND password_user='". $password. "'");
    $donnees2 = $reponse2->fetch();
    // echo var_dump($donnees2);
    if ($donnees2 != false) {
        header("Location:myprofile.php?id=".$donnees2['id_user']);
    }
    else{
        echo " <article> 
        <h2 style='background-color:red; border:2px white solid; width:30%; text-align:center; margin:auto; margin-top:4%;'> Incorrect Password !</h2>
        <a href='login.php' class='btn btn-primary'>Back</a>
        </article>
        ";
    }
} else {
    echo "<article> 
    <h2 style='background-color:red; border:2px white solid; width:30%; text-align:center; margin:auto; margin-top:4%;'> Incorrect Email !</h2>
    <a href='login.php' class='btn btn-primary'>Back</a>
    </article>";
}

require 'view/footer.php';
?>
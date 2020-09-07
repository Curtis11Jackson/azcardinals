<?php
require 'view/header.php';
require 'identifier.php';
require './autoloadclass.php';

$id = $_GET['id'];


$monUserRepo = new UserRepository($db);
$donnees2 = $monUserRepo->getNameById($id);

//echo var_dump($donnees2);

if ($donnees2 != false) {
    echo "<article style='margin-bottom:2vh;'> 
    <h2 style='background-color:red; border:2px white solid; 
    width:30%; text-align:center; margin:auto; margin-top:2vh;'>
   
    Firstname : ".$donnees2[0]['name_user']." <br>
    Lastname : ".$donnees2[0]['email_user']."
    </h2></article>";    
}
else{
    echo " <article> 
    <h2 style='background-color:red; border:2px white solid; 
    width:30%; text-align:center; margin:auto; margin-top:4%;'> id incorrect
    </h2>
        </article>";
}

require 'view/footer.php';
?>


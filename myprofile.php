<?php
require 'view/header.php';
require 'identifier.php';
require './autoloadclass.php';

$id = $_GET['id'];


$monUserRepo = new UserRepository($db);

$donnees2 = $monUserRepo->getNameById($id);

echo var_dump($donnees2);


if ($donnees2 != false) {
    echo "
    <h2 style='margin-top:2%;'>Welcome Back ".$donnees2[0]['name_user']."</h2>
    <button type='button' class='btn btn-success col-4 offset-4' style='margin-top:2%;' data-toggle='modal' data-target='#exampleModalCenter'>
  View my profile
</button>
    <!-- Modal -->
<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle'>My Info</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      Firstname : ".$donnees2[0]['name_user']." <br>
    Email :  " .$donnees2[0]['email_user']." <br>
    Password : " .$donnees2[0]['password_user']." <br>
    Favorite team :  ".$donnees2[0]['team_user']." <br>
      </div>
      <div class='modal-footer'>
      <a href='updateuserinfo.php?id=$id&firstname=".$donnees2[0]['name_user']."&email=".$donnees2[0]['email_user']. "&team=".$donnees2[0]['team_user']."' class='btn btn-warning'>Update my info</a>
      <a href='deleteprofile.php?id=$id' class='btn btn-danger'>Delete my profile</a>
      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
      </div>
    </div>
  </div>
</div>
    ";    
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





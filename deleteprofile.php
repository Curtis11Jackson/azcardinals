<?php
require 'view/header.php';
require 'identifier.php';
require './autoloadclass.php';

$id = $_GET['id'];
$name =  $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$team = $_GET['team'];

$UserTable = array(
'id_user' => $id,
'name_user' => $name,
'email_user' => $email,
'password_user' => $password,
'team_user' => $team,
);

$user = new User($UserTable);

$monUserRepo = new UserRepository($db);

$donnees2 = $monUserRepo->delete($id);

?>

<h1>You have deleted your account !</h1>

<?php
require 'view/footer.php';
?>





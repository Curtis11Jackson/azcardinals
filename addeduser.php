<?php
require 'view/header.php';
require 'identifier.php';
require 'autoloadclass.php';

$id = 2;
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$team = $_POST['team'];


$UserTable = array(
  "id_user" => $id,
  "name_user" => $name,
  'email_user' => $email,
  'password_user' => $password,
  'team_user' => $team,);

$myUser = new User($UserTable);

$monUserRepo = new UserRepository($db);

$monUserRepo -> add($myUser);
?>
    
    <h2 style="text-align:center;">Welcome to the #RedSea <?php echo $UserTable['name_user']. " " ?> !</h2>

    <img src="media/larrythegoat.jpg" class="col-4 offset-4" alt="Touchdown for Fitzgerald">

<section>
    <article>
        <p>Now that you are part of the fan base you can discover more.</p>
    </article>
</section>

<?php
require 'view/footer.php';
?>
<?php
require 'view/header.php';
require 'identifier.php';
require 'autoloadclass.php';

$id = $_GET['id'];
$name = $_GET['firstname'];
$email = $_GET['email'];
$team = $_GET['team'];

$UserTable = array(
    "id_user" => $id,
    "name_user" => $name,
    "email_user" => $email,
    "team_user" => $team
    );
    
    $user = new User($UserTable);
    
    $monUserRepo = new UserRepository($db);
    
    $donnees2 = $monUserRepo->update($user);

?>

<h2 style="text-align:center;">Update your info</h2>

<form class="w-50" method="POST" action="updateduserinfo.php" style="margin:50px auto 20px;">

    <div class="form-group">
        <label for="nom">User Name</label>
        <input type="text" class="form-control" id="name" class="name" name="name" value="<?php echo $name ?>" required>
    </div>

    <div class="form-group">
        <label for="nom">User Email</label>
        <input type="text" class="form-control" id="email" class="email" name="email" value="<?php echo $email ?>" required>
    </div>

    <div class="form-group">
        <label for="nom">User Password</label>
        <input type="password" class="form-control" id="password" class="password" name="password" required>
    </div>

    <div class="form-group">
        <label for="nom">User Team</label>
        <input type="text" class="form-control" id="team" class="team" name="team" value="<?php echo $team ?>" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary" style="margin:auto;">Save</button>
    </div>
</form>

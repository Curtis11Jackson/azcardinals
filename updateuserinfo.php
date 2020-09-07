<?php
require 'view/header.php';
require 'identifier.php';
require 'autoloadclass.php';

$id = 2;
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$team = $_GET['team'];

?>

<h2 style="text-align:center;">Update your info</h2>

<form class="w-50" method="POST" action="addeduser.php" style="margin:50px auto 20px;">

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
        <input type="password" class="form-control" id="password" class="password" name="password" value="<?php echo $password ?>" required>
    </div>

    <div class="form-group">
        <label for="nom">User Team</label>
        <input type="text" class="form-control" id="team" class="team" name="team" value="<?php echo $team ?>" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary" style="margin:auto;">Save</button>
    </div>
</form>

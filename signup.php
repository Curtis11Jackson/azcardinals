<?php
require 'view/header.php';
require 'connectdb.php'
?>

<h1 class="title">Get subscribed Today !</h1>

<section class="sign-up-section">

    <img src="./media/k1.jpg" class="col-4 offset-0 img-fluid" alt="photo of Kyler Murray">

    <img src="./media/murrayvisor1.jpg" class="col-4 offset-4 img-fluid" alt="Kyler Murray with Visor">

</section>

<h3>Sign Up </h3>

<form class="w-50" method="POST" action="addeduser.php" style="margin:50px auto 20px;">

    <div class="form-group">
        <label for="nom">User Name</label>
        <input type="text" class="form-control" id="name" class="name" name="name" placeholder="Enter your name" required>
    </div>

    <div class="form-group">
        <label for="nom">User Email</label>
        <input type="text" class="form-control" id="email" class="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
        <label for="nom">User Password</label>
        <input type="password" class="form-control" id="password" class="password" name="password" placeholder="Enter your password" required>
    </div>

    <div class="form-group">
        <label for="nom">User Team</label>
        <input type="text" class="form-control" id="team" class="team" name="team" placeholder="Enter your favorite team" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary" style="margin:auto;">Save</button>
    </div>
</form>

<?php
require 'view/footer.php';
?>
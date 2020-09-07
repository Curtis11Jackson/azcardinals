<?php
require 'view/header.php';
require 'identifier.php';
require './autoloadclass.php';
?>

<h2 style="text-align:center;">Log In</h2>

<form class="w-25" method="POST" action="CheckAccount.php" style="margin:auto;">
  <div class="form-group">
    <label for="login" style="font-size:18px;">Email</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
  </div>
  <div class="form-group">
    <label for="password" style=" font-size:18px;">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
  </div>
  <div>
    <button type="submit" class="btn btn-success" style="margin:auto;">Log in</button>
  </div>
  <p style="margin-top:3%;">Don't have an account?</p>
  <a href="signup.php" style="font-size:16px;" class="btn btn-primary">
    Create an account
  </a>
</form>



<?php
require "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.footer
{
  padding: 10px 0;     
 background-color: #101010; 
    color:#9d9d9d; 
     bottom: 0; 
    width: 100%; 
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                       
                        <li><a href="cart.html"><span class="glyphicon sglyphicon-shopping-cart"></span> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
 <br><br><br><br>
<div class="container">
 <div class="panel panel-primary">
    <div class="panel-heading"></div>
    <div class="panel-body">
<p class="text-warning">Login to make a purchase</p>
<form method="POST" action="login_submit.php">
<div class="form-group">
<label for="email">Email Address:</label>
<input type="email" class="form-control" id="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
</div>
 <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" required = "true" pattern=".{6,}">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <div class="panel-footer">
<a href="#">
Don't have an account? Register</a>
</div>
  </div>
</div>
<br><br><br><br><br><br><br>
<?php
        include 'footer.php';
        ?>

</body>
</html>

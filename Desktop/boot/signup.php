<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp page</title>
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
input
{
width="50%";
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
                        
                        <li><a href="lg.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
 <br><br><br><br>
<div class="container">
<form action="/action_page.php" >
<h3><b>SIGN UP</b></h3>
<div class="form-group">
<input type="text" class="form-control"  id="usr" placeholder="Name">
</div>
<div class="form-group">
<input type="text" class="form-control"  id="usr" placeholder="Email">
</div>
<div class="form-group">
<input type="text" class="form-control"  id="usr" placeholder="Password">
</div>
<div class="form-group">
<input type="text" class="form-control"  id="usr" placeholder="Contact">
</div>
<div class="form-group">
<input type="text" class="form-control"  id="usr" placeholder="City">
</div>
<div class="form-group">
<input type="text" class="form-control"  id="usr" placeholder="Address">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<br><br><br><br><br><br>
<footer>
<div class="container">
<div class="footer">
<center>Copyright � Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</center>
</div>
</div>
</footer>

</body>
</html>
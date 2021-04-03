<?php
require "common.php";
if (isset($_SESSION['email']))
{   header('location: products.php'); } 
?>
<!Doctype>
<html>
<head>
 <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar in Bootstrap</title>
<style>
.content{
min-height:500px
}
.banner-image
{
padding-bottom:100px; 
    margin-bottom: 50px;   
  text-align: center;
     color: #f8f8f8;   
  background-image: url('intro-bg_1.jpg');
     background-size: cover;
} 
.inner-banner-image
{
   padding-top:12%;

     width:50%;
     margin:auto;
 }
.banner-content
{
 position: relative;
left:6%;
right:50%;
bottom=600%;
     padding-top: 6%;  
   padding-bottom: 6%; 
    overflow:hidden; 
    margin-bottom: 12%; 
    background-color: rgba(0, 0, 0, 0.7);
     max-width: 660px; 
 }
.footer
{
  padding: 10px 0;     
 background-color: #101010; 
    color:#9d9d9d; 
     bottom: 0; 
    width: 100%; 
}
.button
{
position:relative;
left:34%;
right:45%;
background-color:#f44336;
font-size:20;
padding:10px 24px;
border-radius:6px;
box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
width:30%;

}

 
</style>
    </head>
<body>
 <?php
        include 'header.php';
        ?>
<div class="container">
<div class="content">
<div class="banner-image">
<div class="container">
<div class="inner-banner-image">
<div class="banner-content">
<h1> We sell lifestyle</h1>
<p>Flat 40% OFF</p> 

<a href="product.html" ><button type="submit" class="btn btn-danger">Shop Now</button></a>

</div>
</div>
</div>
</div>
</div>
</div>
<?php
        include 'footer.php';
        ?>
 </body>
</html>
 
 
<?php
require "common.php";
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password = $_POST['password'];
echo md5($password);
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$select_query = "SELECT id, email,  FROM user";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>
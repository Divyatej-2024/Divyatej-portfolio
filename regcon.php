<?php
include "connection.php";

$f_name=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username'];
$email=$_POST['email'];
$cartype=$_POST['movie_genre'];
$pass=$_POST['pass'];
$r_pass=$_POST['r_pass'];
$photo=$_FILES['photo']['name'];

if(isset($_POST['regs']))
{
    $sql="INSERT INTO registration (firstname,lastname,username,email,movie_genre,password,c_password,photo) values('$f_name','$lname','$uname','$email','$cartype','$pass','$r_pass','$photo')";
    $result=mysqli_query($conn,$sql);

if($result)
{
    move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo);
    echo"<script>alert('inserted data in the respective database');
    window.location.href ='homepage.php?page=login'; </script>";
}
else{
    echo "something is wrong";
}
$cookie_name = "First_name";
$cookie_value = "$First_name";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
 
$cookie_name = "Movie_preference";
$cookie_value = "$Movie_preference";
setcookie($cookie_name, md5($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
  
}

?>
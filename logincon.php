<?php
session_start();
require_once "connection.php";
if(isset($_POST['submit']))
{
$username= $_POST["username"];
$password= $_POST["password"];

$A= "SELECT * FROM registration WHERE username= '$username' && password= '$password'";
$result = mysqli_query($conn, $A);
$num = mysqli_num_rows($result);      
$row= mysqli_fetch_array($result); 

if ($num == 1){
    $_SESSION["username"] = $row['username'];
    $_SESSION['uid']= $row['userid'];
    $_SESSION['firstname']=$row['firstname'];
    $_SESSION['lastname']=$row['lastname'];
    $_SESSION['staff_name']=$_post['staff_name'];
    echo "<script>alert('successfully loggedin!'); window.location.href='homepage.php?page=index';</script>";
}
else{
    echo "<script>alert('invalid credentials!'); window.location.href='login.php';</script>";
}
}
$cookie_name = "username";
setcookie($cookie_name, md5($username), time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<?php
$servername = "localhost";
$username ="root";
$password = "";
$database = "epic_videos_rental";

$conn=mysqli_connect($servername,$username,$password,$database);



if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
//echo " connected successfully";

?>
<?php

session_start();
include('connection.php');
$ID = $_SESSION['uid'];
$query = "SELECT * FROM registration WHERE 'userid' = '$ID'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_array($results);

?>
<?php

include('connection.php');
session_start();
$query= "SELECT * FROM registration";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}  
      h4{
        font-family:Bahnschrift;
      }
        body {
          font-family: Bahnschrift;
          background:black;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          color: powderblue;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 21px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
.pageTitle {
  font-size: 2em;
  font-weight: bold;
}

.name {
  background-color: whitesmoke;
  color: black;
  height:2rem;
}
.email {
  background-color:whitesmoke;
  color:black;
  height: 2rem;
}

.message {
  background-color: whitesmoke;
  color:black;
  height:12rem;
}
.pageTitle {
  font-size: 2em;
  font-weight: bold;
}
.secondaryTitle {
  color: grey;
}
.mobile{
background-color:whitesmoke;
color:black;
height:2rem;
}
.formEntry {
  display: block;
  margin: 30px auto;
  min-width: 300px;
  padding: 10px;
  border-radius: 2px;
  border: none;
  transition: all 0.5s ease 0s;
}
html {
  height: 100%;
}

.d-flex {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.align-center {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.flex-centerY-centerX {
  justify-content: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

body {
  background-color: #f7f7f7;
}

.submit {
  width: 200px;
  color: white;
  background-color: #0e3721;
  font-size: 20px;
}

.submit:hover {
  box-shadow: 15px 15px 15px 5px rgba(78, 72, 77, 0.219);
  transform: translateY(-3px);
  width: 300px;
  border-top: 5px solid #0e3750;
  border-radius: 0%;
}
img{
  top:50%;
  left:50%;
}
        </style>
</head>
<body style="background:black;">
<div class="topnav">
<a href="homepage.php?page=about"><img src="images/logo1.png" alt="logo" style="float:left;" height="52px"></a>    
    <a href="homepage.php?page=index">Home</a>
    <a href="homepage.php?page=blog&id=<?php echo $_SESSION['uid'];?>">movies</a>
<a href="homepage.php?page=blog1&blog_id=<?php echo $_SESSION['uid'];?>">blog</a>
    <a href="homepage.php?page=buynow">cart</a>
    <a href="homepage.php?page=profile"><?php echo $_SESSION['username']?></a>
<a href="homepage.php?page=logout">logout</a>
  </div><br>
<?php
include "film.php"
?>

</body>
</html>
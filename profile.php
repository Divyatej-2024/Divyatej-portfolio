<?php
include "session.php";
$uid=$_SESSION['uid'];
$query="SELECT * FROM registration WHERE userid=$uid";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheets" href="chat.css">
    <style>
        .right{
            float:right;
        }
        
        .profile{
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background: #f1f1f1;
            border-radius: 10px;
            padding:20px;
            border:1px solid black;
                }
        .text{
            text-align:center;
        }
body{
    background:linear-gradient(to top left,green,#3cba54, #f4c20d, #db3236,skyblue, #4885ed);
            background-size: 100% 100%;
            background-position:center;
            height:625px;
            margin-left:auto;
            margin-right: auto;
            display: block;;
}
img{
    margin-left:auto;
    margin-right:auto;
    height:100px;
    float:right
    ;
}

.trans {
    margin: 30px;
  background-color:#000000;
  opacity: 0.8;
}
    </style>

</head>
<body>
<div class="trans">
<div class="profile">
<div class="text">    
<h2>Profile</h2>
    <img src="cusphotos/<?php echo $row['photo'] ?>" alt="avatar">
            <h4><b><?php echo $row['firstname']." ".$row['lastname'] ?></b></h4>
        <p><?php echo $row['username'] ?></p>
        <p><?php echo $row['email'] ?></p>
        <p><?php echo $row['movie_genre'] ?></p>
    </div>
</div>
</div>
</body>
</html>


<?php
include "connection.php";

$Movie_id=$_GET['id'];
$query="SELECT * FROM adm WHERE Movie_id='$Movie_id'";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_array($result);

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    background:linear-gradient(150deg,#7bd5f5 15%,#787ff6 25%,#4adede 25%,#1ca7ec 24%,#1f2f98 11%);
  width:90%;
  }
* {
  box-sizing: border-box;
}
div{
  background:transparent;
}


.column {
  float: left;
  padding: 10px;
  height: 400px; 
}

.left {
  width: 100%;
  height:60%;
}

.right {
  width: 105%;
  height:40%;
  font-size:25px;
}
.right a{
  width:105%;
  height:40%;
  font-size:25px;
  text-decoration:none;
color:black;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

.cart{

  display: block;
  color: white;
  background:#294d23;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.cart:hover{
background:darkgreen;

}
}
td a{
  text-decoration:none;
  color:#333;
}
</style>
</head>
<body>
<div>
<h2>Movie Description</h2>
<?php
$result=mysqli_query($conn,  $query);
$row=mysqli_fetch_array($result);
?>
<div class="row">
<div class="column1">

</div>
</div>
</div>
<div class="row">

  <div class="column right ">
  <div class=card>
<img src="images/<?php echo $row['moviepic']?>" alt="Movie_picture"width=45% >
<iframe src="<?php echo $row['trai_link']?>" width=600 height=400 frameborder="0"></iframe>
</div>
  <table>
<tr>
<th colspan=2 style="text-align:center";>Description</th>
</tr>
  <tr><td><b> Movie_name:</b></td><td> <?php echo $row["movie_name"]?></td></tr>  
  <tr><td><b> Movie_type:</b></td><td> <?php echo $row['movie_genre']?></td></tr>
  <tr><td><b>artist:</b></td><td> <?php echo $row['artist']?></td></tr>
  <tr><td><b>trailer:</b></td><td><a href='<?php echo $row['trai_link']?>'><?php echo $row['trai_link']?></a></td></tr>  
  <tr><td><b>Description:</b></td><td> <?php echo $row['movie_desc']?></td></tr>    
   </table>
   
 <form action="homepage.php?page=buynow" method="POST">
 <input type="hidden" name="Movie_id" value="<?php echo $Movie_id ?>">
   <button name="submit" class="cart" type="submit">Purchase Now</button>
   </form>
  </div>
  </div>
  </div>
  
</body>
</html>

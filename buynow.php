
<?php
session_start();
include('connection.php');
$Registration_id=$_SESSION['uid'];
 
if(isset($_POST['submit']))
{
   $Movie_id=$_POST['Movie_id'];
   $Quantity=1;

    $query= " INSERT INTO adct (mov_id, user_id, amount) values ('$Movie_id', '$Registration_id',  '$Quantity')";
    $run_edit=mysqli_query($conn,$query);
    if($run_edit)
    {        
       
        echo "<script>alert('Added to cart successfully..!!');</script>";
    }
    else
    {
        echo "<script>alert('Failed to upload.Please try again');window.location.href='moviedescription.php';</script>";
    }

}
$query2 ="SELECT * FROM adm a, adct b WHERE a.Movie_id=b.mov_id and b.user_id='$Registration_id'";
$run_edit=mysqli_query($conn,$query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    font-family: "Arial";
    background-color: skyblue;
  padding:30px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
}

td, th {
  text-align: center;
  padding: 5px;
  height:90px;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li a {
  display: block;
  color: orange;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background-color: black;
}

li a:hover:not(.active) {
  background-color: #333;
}
.purchase{
  display: block;
  color: white;
  float:right;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  background-color: #333;
}
.purchase:hover{
  box-shadow: 0 20px 20px 0 black;

}

.button a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background:#333;
  color: white;
}

.button a:hover:not(.active) {
  box-shadow: 0 20px 20px 0 black;
}




</style>
<body>
<ul>
<li style="float:right"><a href="blog.php" values="<?php echo $Registration_id?>">*Add More*</a></li>
</ul>
    <h1>Your Cart</h1>
    <form action="purchase.php" method="POST">
    <table>
    <tr>
    <th></th>
    <th></th>
    <th>Photo</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Delete</th>
  </tr>
  <?php
  while($row_edit=mysqli_fetch_assoc($run_edit))
  {
      ?>
  <tr>
  <td><input type="hidden" name="" value="<?php echo $row_edit['Movie_id']?>"></td>
  <td><input type="hidden" name="" value="<?php echo $Registration_id?>"></td>
  <td><img src="images/<?php echo $row_edit['moviepic']?>" width=20%></td>
  <td><?php echo $row_edit['movie_name']?></td>
  <td><?php echo $row_edit['amount']?></td>

  <td><button style="background-color:#333; color: white; text-decoration:none;"><a href="delete.php?deleteid=<?php echo $row_edit['act_id']; ?>" onclick="return confirm('Delete items in cart');" style="color:white; text-decoration:none;">Delete</a></button></td>
  
  </tr>
  <?php
    }
  ?>
  <tr>
  </tr>
    </table>
    <br>
 <button name="submit" class="purchase" type="submit">Purchase Now</button>
    </form>
    
  
</body>
</html>
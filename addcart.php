<?php
session_start();
include("connection.php");
$Registration_id=$_SESSION['uid'];
if(isset($_POST['submit'])){

    $query="SELECT * FROM adct WHERE act_id='$Registration_id'"; 
    $row=mysqli_query($conn,$query);
  
    if(  $run=mysqli_fetch_array($row)>0){

        while($row1=mysqli_fetch_array($row)){
            $Movie_id[]=$row1['movie_id'];
            $Quantity[]=$row1['qty'];
        
        for($i=0; $i< count($Movie_id); $i++){
           echo $query="INSERT INTO ordertable (Movie_id, Registration_id, Quantity, Purchase) VALUES('$Movie_id[$i]','$Registration_id','$Quantity[$i]','Complete');";
            mysqli_query($conn,$query);
        }
    }
     }
$query="DELETE FROM adct WHERE user_id='$Registration_id' ";
if(mysqli_query($conn,$query)){
    echo " <script>windows.location.href='homepage.php?page=index';</script>";
}else{
    echo " <script>windows.location.href='buynow.php';</script>";

    ?>
    <?php
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p{
        font-size:30px;
    }
    
button{
    background:orange;
    padding:20px;
    align:center;
    border:1px solid black;
    font-size:20px;
}
    </style>
</head>
<body>
   
   
  <p> Thank for your time! You have successfully Purchased Movie. Click on the below link to retun to home page </p>

 <buton class="button"><a href="homepage.php?page=index" value="<?php echo $Registration_id ?>"> <button >Return to Home</button></a>
  
 
</body>
</html>
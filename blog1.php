<?php
include "connection.php";
session_start();
$userid=$_SESSION['uid'];
$query='select * from blog';
?>
<html>
    <head>
        <title>BLOG</title>
    </head>
    <style>
        body{
        color:white;
            background:linear-gradient(to bottom left,aqua 0%,darkgreen 10%,darkblue 40%,black 100%);
        background-attachment: fixed;
        }
        .name{
            font-size:20px;
            font-family:Bahnschrift;
            text-decoration:underline;
        }
    </style>
    <body>
    <?php 
    

    if($result=mysqli_query($conn,$query))
   { 
       if(mysqli_num_rows($result)>0)
       {
         while($sql1=mysqli_fetch_array($result))
         {
           $id=$sql1['blog_id'];
          $cname=$sql1['movie_name'];
          $desc=$sql1['movie_desc'];
          $carpic=$sql1['photo'];
  

    ?>
<table>
    <tr>
     <img src='images/<?php echo $sql1['photo'];?>' style="height:300px;">
        <td>
<label class="name"><?php echo $sql1['movie_name'];?></label>
        </td></tr><tr>
        <td>
<label><b><i><?php echo $sql1['movie_desc'];?></i></b></label>
        </td>
    </tr>
    <tr>
        <td>
            <label><b><?php echo $sql1['release_date'];?></b></label>
    </td>
</tr>
    </table>
    </body>
    <?php }
    }
}?>
</html>
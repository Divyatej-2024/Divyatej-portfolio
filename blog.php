<?php
include('connection.php');


if (isset($_POST['search']))
{
    $searchkey=$_POST['search'];
    $display1="SELECT * FROM adm WHERE car_name LIKE '%$searchkey%' OR cartype LIKE '%$searchkey%'";

}
else
{
    $display1= "SELECT * FROM adm";
    $searchkey="";
}

$disres= mysqli_query($conn,$display1); 
// $row= mysqli_fetch_array($disres);


?>




<!DOCTYPE html>
<html lang="en">
<head>
  

    <title>Epic videos</title>

    <style>
* {box-sizing: border-box;}


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}



.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.active {
  background-color: #4CAF50;
}

.topnav .search-container button:hover {
  background: #ccc;
}

  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }

/*columns and rows */
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 750px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
/* card view*/
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}

.card:hover {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 20px;
}
/* Button css */
.container a {
  background-color: blue; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.container a:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
body{
  background:linear-gradient(to bottom left,red,skyblue,green);
  background-repeat:no-repeat;
height:645px;
}
  .sa{
    width: 85px;
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    border-radius: 10px;
    color: #fff;
    padding: 8px;
    background-color: gray;
    font-size: 17px;
  }

  .sa:hover{
    background-color: #4ecac8 ;
    color: white ;
  }

</style>


</head>


<body>
    
    </header>




</head>
<body style="font-family: Playfair Display, serif;"  >
<div class="navbar">
  <a href="homepage.php?page=index">Home</a>
  
</div>


<div style="padding:0 16px">

<br><br>



    <h1 style="text-align: center;"><b><u><i>EPIC VIDEOS</i></u></b></h1>


<div class="row">
    <?php 
    

    if($result=mysqli_query($conn,$display1))
   { 
       if(mysqli_num_rows($result)>0)
       {
         while($row=mysqli_fetch_array($result))
         {
           $id=$row['Movie_id'];
          $cname=$row['movie_name'];
          $desc=$row['movie_desc'];
          $carpic=$row['moviepic'];
  

    ?>
  <div class="column">


  
    
<div class="card">
<a href="homepage.php?page=moviedescription&id=<?php echo $id?>"><img src="images/<?php echo $row['moviepic']?>"  style="width:289px; height:350px"></a>
  <div class="container">
                    <h2><b><?php echo $cname; ?></b></h2>
                    <p><?php echo $desc; ?></p>
                    <th>

                </th>



                       



                        <th>

                          <a href="index2.php">Back</a>  

                        </th>
                   </div>
  </div>
</div>






  </div>
  <?php   

         }
        }
    }

?>
</div>

</body>


</body>
</html>


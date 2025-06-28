<?php
include("connection.php");
$query="SELECT * FROM adm";
if(isset($_SESSION['uid'])){
  $Registration_id=$_SESSION['uid'];
  $query1="SELECT * FROM registration WHERE userid='$Registration_id'";
  $result1 = mysqli_query($conn, $query1);
$row1=mysqli_fetch_array($result1);
$Movie_preference=$row1['Movie_preference'];


// {
//   $query2= "SELECT * FROM user INNER JOIN adm ON adm.movie_desc WHERE cust.Customer_id =$Customer_id";
//     $disres=mysqli_query($conn,$query2);
// }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Bahnschrift";

}
h2{
  display:block;
  text-align:center;
  color:black;
  font-size:40px;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

body  {
    background: linear-gradient(to bottom, #ff0066 0%, #ffff00 100%);
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
a:link, a:visited {
  background-color: transparent;
  color: red;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
a:hover, a:active {
  background-color: transparent;
  }

  * {box-sizing: border-box;}

.container {
  position: relative;
  width: 100%;

  display:flex;
}

.image {
  display: flex;
  width: 100%;
  height:250px;
  align:center;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 68%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
.column{
    float:left;
    width:30%;
}
.row  {
width:100%;
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
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
.flow{
  padding-left:30%;
  display: inline-block;
  max-width: 1000px;
  position: relative;
  margin: auto;
}
</style>
</head>
<body>
<?php

  $query2="SELECT * FROM adm WHERE movie_genre LIKE '%$Movie_preference%'";
  $disres=mysqli_query($conn,$query2);

						while($row=mysqli_fetch_array($disres))
						{
                      
							$Movie_picture=$row['moviepic'];
              $Movie_name=$row['movie_name'];
				?>
        <div class="mySlides fade">
<img src="images/<?php echo $row["moviepic"]?>" alt="Avatar"   style="height: 800px;">
            <!-- <img class="flow" src="images/<?php echo $Movie_picture;?>"  style="width:90%;height: 500px;" > -->
            <div class="text"><?php echo $Movie_name; ?></div>
        </div>
        <?php
                        }
        ?>
       

    </div>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>

</div>

</body>
</html>
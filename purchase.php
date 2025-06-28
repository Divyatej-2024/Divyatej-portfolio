<?php

include "session.php";
$Registration_id=$_SESSION['uid'];

		$sql = "SELECT mov_id,amount FROM adct WHERE user_id = '$Registration_id'";
        $query = mysqli_query($conn,$sql);
        
        if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$movie_id[] = $row["mov_id"];
            $qty[] = $row["amount"];
            
			}

			for ($i=0; $i < count($movie_id); $i++) { 
                
               
				$sql = "INSERT INTO ordertable (Registration_id,Movie_id,Quantity,Purchase) VALUES ('$Registration_id','$movie_id[$i]','$qty[$i]','Purchased')";
				mysqli_query($conn,$sql);
				$updatequantity="UPDATE adm SET sold_copies=sold_copies+$qty[$i] WHERE movie_id=$movie_id[$i]";
				mysqli_query($conn,$updatequantity);
			}

			$sql = "DELETE FROM adct WHERE user_id = '$Registration_id'";
			if (mysqli_query($conn,$sql)) {
				?>
					<!DOCTYPE html>
					<html>
						<head>
							<meta charset="UTF-8">
							<title>Epic Videos</title>
							
							
							<style>
								table tr td {padding:10px;}
		body{
background:linear-gradient(270deg,#c6a477 5%,#ecd59f 15%,#d3e7ee 25%,#abd1dc 24%,#7097ab 25%);
		}
		</style>
						</head>
					<body>
						
						<div class="container-fluid">
						
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="panel panel-default">
										<div class="panel-heading"></div>
										<div class="panel-body">
											<h1>Thankyou </h1>
											<hr/>
											<p>Hello <?php echo "<b>".$_SESSION["username"]."</b>"; ?>,Your payment process is 
											successfully completed. <br/>
											you can continue your Shopping <br/></p>
											<a href="homepage.php?page=index" class="btn btn-success btn-lg">Return To Home</a>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</body>
					</html>

				<?php
			}
		}



?>


















































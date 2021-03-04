<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ΟΑΣΑ</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icons/oasa_logo_1.png"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/popup.css">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="css/util.min.css">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
		<p>	
			<?php
			if (isset($_SESSION['instructions'])){ 
				echo "<div class='header'>Από {$_SESSION['startpoint']} Προς {$_SESSION['endpoint']}</div>";
				$a = 0;
				$steps = explode("/",$_SESSION['instructions']);
				
				// print_r($steps);
				foreach ($steps as $key=>$value) {
					// print_r($key,$value);
					if ($value == " Στάσεις:") {
						echo "<div class='inst3'> {$value} </div>";
						$a = $key;
					} else if ($key == $a+1){
						$staseis = explode(",",$value);
						foreach ($staseis as $key2=>$value2) {
							echo "<div class='staseis'> <i class='fa fa-map-pin'></i> {$value2} </div>";
						}
					}else if ($value == " Αποβίβαση") {
						echo "<div class='inst2'> {$value} </div>"; 
					} else{
						echo "<div class='inst4'> {$value} </div>";
					}
				}
				echo "<div class = 'destination'><i class='fas fa-map-marker-alt'></i>{$_SESSION['endpoint']}</div>";

				echo "<div class='total'>Συνολικός Χρόνος: {$_SESSION['time_of_transport']}</div>";				
			}
			else {
				echo "Δεν υπάρχουν αποτέλεσματα για αυτή την αναζήτηση";
			}  
			?>
		</p>
	</body>
</html>


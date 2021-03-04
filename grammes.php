<?php include('server.php'); ?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ΟΑΣΑ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/oasa_logo_1.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/grammes.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
		
		<ul class="breadcrumb">
  		  <li><a href="index.php">Αρχική</a></li>
		  <li>Πληροφορίες Γραμμών</li>
		</ul>

		<div class="login100-form-title">
			Πληροφορίες Γραμμών
		</div>
		
		<div class="container-login100">
			<div class="text">
				<div class = "dropdown">
				<form action="grammes.php" method="post">
					<div class="wrap-input100 validate-input" data-validate="Please choose a group">
						<select name="bus_line" class="txt4" onchange="this.form.submit()">
							<option value="" selected>Επιλέξτε Γραμμή</option>
	  						<option value="550">550: Π. ΦΑΛΗΡΟ - ΚΗΦΙΣΙΑ</option>
	  						<option value="608">608: ΓΑΛΑΤΣΙ - ΑΚΑΔΗΜΙΑ - ΖΩΓΡΑΦΟΥ</option>
	  						<option value="308">308: ΣΤ. ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ - ΠΑΙΑΝΙΑ - ΚΟΡΩΠΙ</option>
						</select>
					</div>
					<noscript><input type="submit" value="Submit"></noscript>
				</form>
			</div>

				<?php 
					if (isset($_SESSION['dromologia_start'])){
						echo "<div class='name'>{$_SESSION['name']}</div>";
						$dromologia_start = explode("/",$_SESSION['dromologia_start']);
						$dromologia_end = explode("/",$_SESSION['dromologia_end']);
						$staseis = explode("/",$_SESSION['stops']);

						echo "<div class='st'>Δρομολόγια από Αφετηρία:</div>";

						foreach ($dromologia_start as $key=>$value) {
							echo "<div class='d1'>{$value}</div>";
						}

						echo "<div class='st'>Δρομολόγια από Τέρμα:</div>";

						foreach ($dromologia_end as $key=>$value) {
							echo "<div class='d1'>{$value}</div>";
						}

						echo "<div class='st2'>Στάσεις:</div>";

						foreach ($staseis as $key=>$value) {
							echo "<div class='staseis'> <i class='fa fa-map-pin'></i> {$value}</div>";
						}						
						
					}
				?>
			</div>		
		</div>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<?php include('footer.php'); ?>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>

</body>
</html>
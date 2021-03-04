<?php include('server.php') ?>
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


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">


	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<div class="container-login100">
		<div class="login100-form-title">
				Ολοκλήρωση Αγορών
		</div>

		<div class="row">
  			<div class="col-75">
    			<div class="container2">
      				<form action="checkout.php" method="post">
						<div class="row">
							<div class="col-50">            
					            <label for="fname"><i class="fa fa-user"></i>Όνομα </label>
					            <input type="text" id="fname"name="first_name" required value="<?php if (isset($_SESSION['first_name'])){ echo $_SESSION['first_name'];} ?>">
					            <label for="lname"><i class="fa fa-user"></i> Επώνυμο</label>
					            <input type="text" id="lname"name="last_name" required value="<?php if (isset($_SESSION['last_name'])){echo $_SESSION['last_name'];} ?>">
					            <label for="cardnumber"><i class="fa fa-credit-card"></i> Αριθμός Κάρτας ΟΑΣΑ</label>
					            <input type="text" id="cardnumber" name="card_number" required value="<?php if (isset($_SESSION['card_number'])){ echo $_SESSION['card_number'];} ?>">
					            <label for="email"><i class="fa fa-envelope"></i> Email</label>
					            <input type="text" id="email" name="email" required value="<?php if (isset($_SESSION['email'])){echo $_SESSION['email'];} ?>">     					                           
				          	</div>
							<div class="col-50">
            					<h3>Πληρωμή</h3>
            
            					<div class="icon-container">
					              <i class="fa fa-cc-visa" style="color:navy;"></i>
					              <i class="fa fa-cc-amex" style="color:blue;"></i>
					              <i class="fa fa-cc-mastercard" style="color:red;"></i>
					              <i class="fa fa-cc-discover" style="color:orange;"></i>
					            </div>
					            <label for="cname">Όνομα Κατόχου</label>
					            <input type="text" id="cname" name="cardname" required>
					            <label for="ccnum">Αριθμός Πιστωτικής Κάρτας</label>
					            <input type="text" id="ccnum" name="cardnumber" required>
					            <label for="expmonth">Λήξη</label>
					           	<select name="expmonth" class="dropdown">
					  				<option value="d1">01/2020</option>
									<option value="d2">02/2020</option>
									<option value="d3">03/2020</option>
									<option value="d4">04/2020</option>
									<option value="d5">05/2020</option>
									<option value="d6">06/2020</option>
									<option value="d7">07/2020</option>
									<option value="d8">08/2020</option>
									<option value="d">09/2020</option>
									<option value="d9">10/2020</option>
									<option value="d10">11/2020</option>
									<option value="d11">12/2020</option>
									<option value="d12">01/2021</option>
									<option value="d13">02/2021</option>
									<option value="d14">03/2021</option>
									<option value="d15">04/2021</option>
									<option value="d5">05/2021</option>
									<option value="d6">06/2021</option>
									<option value="d7">07/2021</option>
									<option value="d8">08/2021</option>
									<option value="d">09/2021</option>
									<option value="d9">10/2021</option>
									<option value="d10">11/2021</option>
									<option value="d11">12/2021</option>
								</select>

					            <div class="row">
					              <div class="col-50">
					                <label for="csv">CSV</label>
					                <input type="text" id="csv" name="csv" required>
					              </div>
					            </div>
          					</div>
						</div>
          				<button type="submit" class="btn3" name="checkout">Ολοκλήρωση Αγοράς</button>
      				</form>
    			</div>
  			</div>
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
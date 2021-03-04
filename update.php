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
	<link rel="stylesheet" type="text/css" href="css/update.css">
<!--===============================================================================================-->
</head>
<body class="animsition">	

	<ul class="breadcrumb">
  				  <li><a href="index.php">Αρχική</a></li>
				  <li>Επεξεργασία Λογαριασμού</li>
			</ul>

		<div class="container-login100">
			
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" id="myform" action="update.php" method="post">
					<span class="login100-form-title">
						Επεξεργασία Λογαριασμού
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter first name">
						<label class="labels" for="first_name">Όνομα</label>
  	  					<input class="input100" type="text" name="first_name" required value="<?php if (isset($_SESSION['first_name'])){ echo $_SESSION['first_name'];} ?>">
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter last name">
						<label class="labels" for="last_name">Επώνυμο</label>
  	  					<input class="input100" type="text" name="last_name" required value="<?php if (isset($_SESSION['last_name'])){echo $_SESSION['last_name'];} ?>">
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter card number">
						<label class="labels" for="card_number">Αριθμός Κάρτας ΟΑΣΑ</label>
  	  					<input class="input100" type="number" name="card_number" required value="<?php if (isset($_SESSION['card_number'])){ echo $_SESSION['card_number'];} ?>">
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<label class="labels" for="email">Email</label>
  	  					<input class="input100" type="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="<?php if (isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Please choose a group">
						<label for="belongs_to"></label>
						<select name="belongs_to" class="txt4" id = "select_group">
	  						<option value="full_price">Δικαιούχος ενιαίου εισιτηρίου</option>
	  						<option value="up_to_18">Έως 18 ετών</option>
							<option value="student">Φοιτητής/τρια</option>
							<option value="student_iek">Σπουδαστής/τρια Δημόσιου ΙΕΚ</option>
							<option value="student_abroad">Φοιτητής/τρια ξένης σχολής</option>
							<option value="over_65">Άνω των 65</option>
							<option value="unemployed">Άνεργος/η</option>
							<option value="polyteknos">Πολύτεκνος/η</option>
							<option value="amea">ΑΜΕΑ</option>
						</select>
					</div>
					<?php 
						if (isset($_SESSION['paso'])){
							echo "<div id='student' class='wrap-input100 validate-input m-b-16'>
							<label class='labels' for='paso'>Αριθμός Ακαδημαϊκής  Ταυτότητας</label>
  	  						<input class='input100' type='number' name='paso' required value={$_SESSION['paso']}>
							</div>";
						}

					?>
				<!-- 	
					</br>
					<div id = "validation" class="wrap-input100 validate-input">
						<div>
							<p class="txt5">
								Επισύναψη Δικαιολογητικών 
							</p>
						</div>
						<div>
							<input class="files" type="file" name="myFile" multiple>
						</div>
					</div>
					 -->
					
					<script type="text/javascript">		
						  $("#select_group").change(function(){
						  	 if ($(this).val() == "full_price") {
    							$('#validation').hide();
						    	$('#student').hide();
						    } else if ($(this).val() == "student"){
						    	$('#validation').hide();
						    	$('#student').show();
						    } else if ($(this).val() == "student_iek"){
						    	$('#validation').hide();
						    	$('#student').show();
						    } else if ($(this).val() == "student_abroad"){
						    	$('#validation').hide();
						    	$('#student').show();
						    	$('#validation').hide();
						    } else {
						    	$('#validation').show();
						    	$('#student').hide();
						    }
						  });
						  $("#select_group").trigger("change");
					
					</script>
				
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="update_profile">ΥΠΟΒΟΛΗ</button>
						
					</div>

					
				</form>
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
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</body>
</html>
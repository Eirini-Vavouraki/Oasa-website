<?php include('server.php') ?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	

	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
<!--===============================================================================================-->

</head>
<body class="animsition">
	
		<div class="login100-form-title">
			Εύρεση Διαδρομής
		</div>
		
		<script TYPE="text/javascript"> function popupform(myform, windowname) { if (! window.focus)return true; window.open('', windowname, 'height=600,width=800,left=250,top=30,scrollbars=yes'); myform.target=windowname; return true; } </script>


		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" onSubmit="popupform(this, 'oasa popup')">
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter startpoint">
						<label for="from"></label>
  	  					<input class="input100" type="text" name="startpoint" required placeholder="Από">
  	  					<span class="focus-input100"></span>
					</div>
					<div class="wrap-input101 validate-input" data-validate = "Please enter endpoint">
						<label for="to"></label>
  	  					<input class="input100" type="text" name="endpoint" required placeholder="Προς">
  	  					<span class="focus-input100"></span>
  	  				</div>

					<div class="container-login100-form-btn">
												
						<div class="input-group">
  							<button type="submit" class="login100-form-btn" name="search_route">Εύρεση</button>
  						</div>
  						
					</div>
				</form>
			</div>
		</div>

		
			<div class="container2">
				<a href="#"><div class="container-login100-form-btn2">OASA Telematics</div></a>					
				<p class="txt4"> Αφίξεις λεωφορείων σε πραγματικό χρόνο </p>
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
	
</body>
</html>
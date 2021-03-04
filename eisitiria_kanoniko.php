<?php
include('server.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($db,"SELECT * FROM `eisitiria_kanoniko` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Το προϊόν προστέθηκε στο καλάθι!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Το προϊόν βρίσκεται ήδη στο καλάθι!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Το προϊόν προστέθηκε στο καλάθι!</div>";
	}

	}
}
?>
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/eisitiria_kanoniko.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
			
		<ul class="breadcrumb">
  		  <li><a href="index.php">Αρχική</a></li>
  		  <li><a href="agora.php">Αγορά Εισιτηρίου</a></li>
		  <li>Κανονικά Εισιτήρια</li>
		</ul>

		<p class="txt6">Eνιαία Εισιτήρια</p>


		<div class="container-login100">
			
			<div class="container-login100-form-btn3">Κανονικό 90 λεπτών <p class="txt7"> 1,40€</p></div>					
			<div class="container-login100-form-btn2">Ημερήσιο 4,50€</div>		
			<div class="container-login100-form-btn4">Πέντε ημερών 9,00€</div>
			<div class="container-login100-form-btn5">Τουριστικό 3 ημερών <p class="txt7"> 22,00€</div>		
			<div class="container-login100-form-btn6">Κανονικό λεωφορείων </p><p class="txt7">EXPRESS 6,00€</p></div>					
			<div class="container-login100-form-btn7">Κανονικό ΜΕΤΡΟ<p class="txt7"> 10,00€</div>		
			<div class="container-login100-form-btn8">Αεροδρομίου μετ' επιστροφής ΜΕΤΡΟ <p class="txt7"> 18,00€</div>
			<div class="container-login100-form-btn9">Αεροδρομίου από και  <p class="txt7"> προς Παλλήνη-Κάντζα-<p class="txt7">Κορωπί ΜΕΤΡΟ  6,00€</div>	
			
		</div>

		<?php
		if(!empty($_SESSION["shopping_cart"])) {
		$cart_count = count(array_keys($_SESSION["shopping_cart"]));}

		$result = mysqli_query($db,"SELECT * FROM `eisitiria_kanoniko`");
		
		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
				
					  <button type='submit' class='buy1'>Προσθήκη</button>
					  </form>
				   	  </div>";

		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
				
					  <button type='submit' class='buy2'>Προσθήκη</button>
					  </form>
				   	  </div>";

		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
					  
					  <button type='submit' class='buy3'>Προσθήκη</button>
					  </form>
				   	  </div>";

		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
					  
					  <button type='submit' class='buy4'>Προσθήκη</button>
					  </form>
				   	  </div>";


	$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
				
					  <button type='submit' class='buy5'>Προσθήκη</button>
					  </form>
				   	  </div>";

		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
				
					  <button type='submit' class='buy6'>Προσθήκη</button>
					  </form>
				   	  </div>";

		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
					  
					  <button type='submit' class='buy7'>Προσθήκη</button>
					  </form>
				   	  </div>";

		$row = mysqli_fetch_assoc($result);
		echo "<div class='product_wrapper'>
					  <form method='post' action=''>
					  <input type='hidden' name='code' value=".$row['code']." />
					  
					  <button type='submit' class='buy8'>Προσθήκη</button>
					  </form>
				   	  </div>";

		mysqli_close($db);
		?>


		<div class="txt10"><p class="txt9">Εισιτήρια Αεροδρομίου</p></div>

		<div style="clear:both;"></div>

		<div class="message_box" style="margin:10px 0px;">
		<?php echo $status; ?>

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
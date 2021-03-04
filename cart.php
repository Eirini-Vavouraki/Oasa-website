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
	<link rel="stylesheet" type="text/css" href="css/cart.css">
<!--===============================================================================================-->

</head>
<body class="animsition">
	
		<div class="login100-form-title">
				Καλάθι Αγορών
		</div>
		
		<?php  if (isset($_SESSION['first_name'])) : ?>
		    	<div class="user_ext"><a href="#" class="user"><?php //echo $_SESSION['first_name']; ?></a></div>
		    		<p> <a href="logout.php" class="log_out">Αποσύνδεση</a> </p>
		    		<p> <a href="update.php" class="edit">Επεξεργασία Λογαριασμού</a> </p>
		    <?php endif ?>

		
		<?php
		if(!empty($_SESSION["shopping_cart"])) {
		$cart_count = count(array_keys($_SESSION["shopping_cart"]));
		?>
		<div class="cart_div">
		<a href="cart.php">
		<img src="cart-icon.png" /> Καλάθι
		<span><?php echo $cart_count; ?></span></a>
		</div>
		<?php
		}
		?>

		<div class="cart">
		<?php
		if(isset($_SESSION["shopping_cart"])){
		    $total_price = 0;
		?>	

		<table class="table">
		<tbody>
		<tr>

		<td>ΤΥΠΟΣ ΚΟΜΙΣΤΡΟΥ</td>
		<td>ΠΟΣΟΤΗΤΑ</td>
		<td>ΤΙΜΗ</td>
		</tr>	
		<?php		
		foreach ($_SESSION["shopping_cart"] as $product){
		?>

		<div class="container-login100">
			<tr>
			<td><?php echo $product["name"]; ?><br />
			<form method='post' action=''>
			<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
			<input type='hidden' name='action' value="remove" />
			<button type='submit' class='remove'>Διαγραφή</button>
			</form>
			</td>
			<td>
			<form method='post' action=''>
			<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
			<input type='hidden' name='action' value="change" />
			<select name='quantity' class='quantity' onchange="this.form.submit()">
			<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
			<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
			<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
			<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
			<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
			<option <?php if($product["quantity"]==6) echo "selected";?> value="6">6</option>
			<option <?php if($product["quantity"]==7) echo "selected";?> value="7">7</option>
			<option <?php if($product["quantity"]==8) echo "selected";?> value="8">8</option>
			<option <?php if($product["quantity"]==9) echo "selected";?> value="9">9</option>
			<option <?php if($product["quantity"]==10) echo "selected";?> value="10">10</option>
			</select>
			</form>
			</td>
			<td><?php echo "€".$product["price"]*$product["quantity"]; ?></td>
			</tr>
		</div>
		<?php
		$total_price += ($product["price"]*$product["quantity"]);
		}
		?>
		<div class="container-login100">
			<tr>
			<td colspan="5" align="right">
			<strong>Σύνολο: <?php echo "€".$total_price; ?></strong>
			</td>
			</tr>
			</tbody>
			</table>
		</div>		
		
		<?php
			}else{
				echo '<h1 class="empty_cart">Το καλάθι είναι άδειο!</h1>';
				
			}
		?>
		</div>

		<div style="clear:both;"></div>

		<div class="message_box" style="margin:10px 0px;">
			<?php echo $status; ?>
		</div>


		</div>


		<form action="cart.php" method="post">
			<div  class="container-login100" >
		 		<button type="submit" class="btn3" name="agora">Αγορά</button>
			</div>
		</form>

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
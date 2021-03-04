<?php
session_start();

// initializing variables
$first_name = "";
$last_name = "";
$card_number = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$belongs_to = "";
$paso= "";
$errors = 0; 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'pwdpwd', 'sdi1500014');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $card_number = $_POST['card_number'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $belongs_to = $_POST['belongs_to'];
  $paso = $_POST['paso'];

  if (empty($first_name)) { $errors++; }
  if (empty($last_name)) { $errors++; }
  if (empty($email)) { $errors++; }
  if (empty($password_1)) { $errors++; }
  if ($password_1 != $password_2) { $errors++; }

  // check the database to make sure a user does not already exist with the same card number and/or email
  $user_check_query = "SELECT * FROM users WHERE card_number='$card_number' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['card_number'] === $card_number) { $errors++; }

    if ($user['email'] === $email) { $errors++; }
  }

  // register user if there are no errors in the form
  if ($errors == 0) {
    $password = $password_1;
  	$query = "INSERT INTO users (first_name, last_name, card_number,email, password, belongs_to, paso) 
  			      VALUES('$first_name', '$last_name', $card_number,'$email', '$password', '$belongs_to', '$paso')";
  	mysqli_query($db, $query);
  	$_SESSION['first_name'] = $first_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  if(!isset($_SESSION['first_name'])){
    // receive all input values from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
      $errors++;
    }
    if (empty($password)) {
      $errors++;
    }

    if ($errors == 0) {
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);

      $user = mysqli_fetch_assoc($results);
      $first_name = $user['first_name'];
      $id=$user['id'];
      $last_name = $user['last_name'];
      $card_number = $user['card_number'];
      $email = $user['email'];  
      $belongs_to = $user['belongs_to'];
      $paso = $user['paso'];  

      if (mysqli_num_rows($results) == 1) {
        $_SESSION['first_name'] = $first_name;
        $_SESSION['id'] = $id;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['card_number'] = $card_number;
        $_SESSION['email'] = $email;
        if ($belongs_to != 'full_price'){
          $_SESSION['belongs_to'] = $belongs_to;
        }
        if ($paso != ""){
          $_SESSION['paso'] = $paso;
        }
        header('location: index.php');
      }
    }
  }  
}

  // UPDATE USER DATA
if (isset($_POST['update_profile'])) {
  // receive all input values from the form
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $card_number = $_POST['card_number'];
  $email = $_POST['email'];
  $belongs_to = $_POST['belongs_to'];
  $paso = $_POST['paso'];

  if (empty($first_name)) { $errors++; }
  if (empty($last_name)) { $errors++; }
  if (empty($email)) { $errors++; }
  
  // update user data if there are no errors in the form
  if ($errors == 0) {
    $id = $_SESSION['id'];
    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', card_number = '$card_number', email = '$email', belongs_to = '$belongs_to', paso= '$paso' WHERE id = '$id' ";
    mysqli_query($db, $query);
    header('location: index.php');
  }
}

// LOGIN FOR CHECKOUT
if (isset($_POST['login_checkout'])) {
  // receive all input values from the form
  $email = $_POST['email'];
  $password = $_POST['password'];

  $errors = 0;

  if (empty($email)) {
    $errors++;
  }
  if (empty($password)) {
     $errors++;
  }

  if ($errors == 0) {
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($results);
    $first_name = $user['first_name'];
    $id=$user['id'];
    $last_name = $user['last_name'];
    $card_number = $user['card_number'];
    $email = $user['email'];  

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['first_name'] = $first_name;
      $_SESSION['id'] = $id;
      $_SESSION['last_name'] = $last_name;
      $_SESSION['card_number'] = $card_number;
      $_SESSION['email'] = $email;
      header('location: checkout.php');
    }
  }
}

//CHECKOUT
if (isset($_POST['checkout'])) {
  // receive all input values from the form
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardnumber'];
  $expmonth = $_POST['expmonth'];
  $csv = $_POST['csv'];

  if (empty($first_name)) { $errors++; }
  if (empty($last_name)) { $errors++; }
  if (empty($email)) { $errors++; }
  if (empty($cardname)) { $errors++; }
  if (empty($cardnumber)) { $errors++; }
  if (empty($csv)) { $errors++; }
    
  if ($errors == 0) {
    foreach ($variable as $key => $value) {
      $uniqueID = md5(uniqid(rand(), true));
      $_SESSION[$key] = $uniqueID;
    }

    header('location: complete_purchase.php');
  }
}

//PURCHASE
if (isset($_POST['agora'])){
  if (isset($_SESSION['first_name'])) {    
    header('location: checkout.php');
  }
  else {
    header('location: login_checkout.php');  
  }
}

//ROUTE PLANNER
if (isset($_POST['search_route'])){
  $startpoint = "";
  $endpoint = "";
  $instructions = "";
  $time_of_transport = "";

  $startpoint = $_POST['startpoint'];
  $endpoint = $_POST['endpoint'];

  if (empty($startpoint)){ $errors++;}
  if (empty($endpoint)){ $errors++;} 


  $query = "SELECT * FROM routes WHERE startpoint = '$startpoint' AND endpoint ='$endpoint'";
  $results = mysqli_query($db, $query);

  $route = mysqli_fetch_assoc($results);
  $startpoint = $route['startpoint'];
  $endpoint = $route['endpoint'];
  $instructions = $route['instructions'];
  $time_of_transport = $route['time_of_transport']; 

  if ($errors==0) {
    if (mysqli_num_rows($results) == 1){
      $_SESSION['startpoint'] = $startpoint;
      $_SESSION['endpoint'] = $endpoint;
      $_SESSION['instructions'] = $instructions;
      $_SESSION['time_of_transport'] = $time_of_transport;
      header('location: popup.php');
    }    
  }
}

//SELECT BUS LINE
if (isset($_POST['bus_line'])) {
  $bus_line = $_POST['bus_line'];

  $query = "SELECT * FROM buses WHERE bus_line = '$bus_line'";
  $results = mysqli_query($db, $query);

  $bus = mysqli_fetch_assoc($results);
  $name = $bus['name']; 
  $dromologia_start = $bus['dromologia_start'];
  $dromologia_end = $bus['dromologia_end'];
  $stops = $bus['stops'];

  $_SESSION['name'] = $name;
  $_SESSION['dromologia_start'] = $dromologia_start;
  $_SESSION['dromologia_end'] = $dromologia_end;
  $_SESSION['stops'] = $stops;
}

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
  foreach($_SESSION["shopping_cart"] as $key => $value) {
    if($_POST["code"] == $key){
    unset($_SESSION["shopping_cart"][$key]);
    $status = "<div class='box' style='color:#3841f5;'>
    Το προϊόν αφαιρέθηκε από το καλάθι!</div>";
    }
    if(empty($_SESSION["shopping_cart"]))
    unset($_SESSION["shopping_cart"]);
      }   
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
    }
}

    
}

?>

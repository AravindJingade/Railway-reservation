
<?php
 session_start();  
if (!isset($_SESSION["email"]))
 {  
    header("location:main.php"); 
 }  

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="payment.css" type="text/css">
    <title>PAYMENT DETAILS</title>
</head>
<body>
<div>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once 'searchLIB/config.php';
$table='payment';
if(isset($_POST['btn_submit']))
{
		$firstname_p = $_POST['firstname_p'];
		$email_p = $_POST['email_p'];
		$address_p = $_POST['address_p'];
		$city_p = $_POST['city_p'];
        $state_p = $_POST['state_p'];
        $zip_p = $_POST['zip_p'];
        $cardname_p = $_POST['cardname_p'];
        $cardnumber_p = $_POST['cardnumber_p'];
        $expmonth_p = $_POST['expmonth_p'];
        $expyear_p = $_POST['expyear_p'];
        $cvv_p = $_POST['cvv_p'];
		
        $crd->insert_payment($table,$firstname_p,$email_p,$address_p,$city_p,$state_p,$zip_p,$cardname_p,$cardnumber_p,$expmonth_p,$expyear_p,$cvv_p);
        header('location:booksts.php');
    }

?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname_p" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email_p" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address_p" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city_p" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state_p" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip_p" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname_p" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber_p" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="month" id="expmonth" name="expmonth_p" placeholder="September" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear_p" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv_p" placeholder="352" required>
              </div>
            </div>
          </div>

        </div>
        <input type="submit" value="Proceed Payment" class="btn" name="btn_submit">
    </div>
  </div>
</div>
</form>
</body>
</html>
<?php
 session_start();  
if (!isset($_SESSION["email"]))
 {  
    header("location:main.php"); 
 }  

?>
<html>
<head>
<title>
book ticket
</title>
<link rel="stylesheet" type="text/css" href="booktkt.css">
</head>
<body>
<div class="bookticket">
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once 'searchLIB/config.php';
$table='booktkts';
if(isset($_POST['button_submit']))
{
		$train_no = $_POST['train_no'];
		$from_ad = $_POST['from_ad'];
		$to_ad = $_POST['to_ad'];
		$be_date = $_POST['be_date'];
		$time_ab = $_POST['time_ab'];
		
		$crd->insert_booking($table,$train_no,$from_ad,$to_ad,$be_date,$time_ab);
		header('location:bookinpayment.php');
	}

?>
<form action="" method="post">
		<label for="train_no"><b>train no.</b></label></br>
      <input type="number" placeholder="train num" name="train_no" ></br>
 		<label for="from"><b>From</b></label></br>
      <input type="text" placeholder="Source" name="from_ad" ></br>
	  
	   <label for="to"><b>To</b></label></br>
      <input type="text" placeholder="Destination" name="to_ad" ></br>
	  
	   <label for="date"><b>Date</b></label></br>
      <input type="Date" name="be_date" ></br>
	  
	  <label for="time"><b>Time</b></label></br>
	  <input type="time" name="time_ab" ></br>
	  
	  <input type="submit" value="book" name="button_submit">
</form>
</div> 
	  
	  
</body>
</html>
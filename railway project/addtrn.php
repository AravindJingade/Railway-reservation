
<?php
 session_start();  
if (!isset($_SESSION["emailad"]))
 {  
    header("location:adminhome.php"); 
 }  

?><html>
<head>
<title>
ADD TRAIN
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
$table='train_details';
if(isset($_POST['button_submit']))
{
        $train_no = $_POST['train_no'];
        $train_name = $_POST['train_name'];
		$from_ab = $_POST['from_ab'];
		$to_cd = $_POST['to_cd'];
		$date_cd = $_POST['date_cd'];
		$time_cd = $_POST['time_cd'];
		
		$crd->insert_train($table,$train_no,$train_name,$from_ab,$to_cd,$date_cd,$time_cd);
		header('location:adtrain_details.php');
	}

?>
<form action="" method="post">
		<label for="train_no"><b>train no.</b></label></br>
      <input type="number" placeholder="train num" name="train_no" required></br>
      <label for="train_name"><b>train name.</b></label></br>
      <input type="text" placeholder="train name" name="train_name" required></br>
 		<label for="from"><b>From</b></label></br>
      <input type="text" placeholder="Source" name="from_ab" required></br>
	  
	   <label for="to"><b>To</b></label></br>
      <input type="text" placeholder="Destination" name="to_cd" required></br>
	  
	   <label for="date"><b>Date</b></label></br>
      <input type="Date" name="date_cd" required></br>
	  
	  <label for="time"><b>Time</b></label></br>
	  <input type="time" name="time_cd" required></br>
	  
	  <input type="submit" name="button_submit">
</form>
</div> 
	  
	  
</body>
</html>
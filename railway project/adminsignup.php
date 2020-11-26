<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


require_once 'searchLIB/config.php';
$table='admins';
	if(isset($_POST['createad']))
{
		
		$fnamead = $_POST['fnamead'];
		$lnamead = $_POST['lnamead'];
		$emailad = $_POST['emailad'];
		$pwdad = $_POST['pwdad'];
		$genderad = $_POST['genderad'];
		
    $crd->insert_register1($table,$fnamead,$lnamead,$emailad,$pwdad,$genderad);
    $result =$crd->fetch_booking_data($table);
  }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
<title>ADMIN SIGNUP</title>
</head>
<body>
<p class="headerTxt">INDIAN RAILWAYS</p>
<?php if(isset($_POST['createad'])==true){
echo"Account Created For: $fnamead";
}?>
<form action=""  method="POST" id="signform">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="fname"><b>Firstname</b></label>
      <input type="text" placeholder="Enter Firstname" name="fnamead" required>
	  
	   <label for="lname"><b>Lastname</b></label>
      <input type="text" placeholder="Enter Lastname" name="lnamead" required>

    <label for="email"><b>Email</b></label>
    <input type="email" width="100%" padding= "15px" margin= "5px 0 22px 0" placeholder="Enter Email" name="emailad" id="email"  required></br>

    <label for="pwd"><b>Password</b></label>
    <input type="password" id="pwd" placeholder="Enter Password" name="pwdad" required>

	<label for="gender">
	<input type="radio" name="genderad" value="male" required> Male
  <input type="radio" name="genderad" value="female" required> Female
  <input type="radio" name="genderad" value="other" required> Other<br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
	 <input type="reset" class="signupBtn" value="Cancel" >
	 <input type="submit" name="createad" id="submitbtn" class="signupBtn" value="Sign up"></br>
   <a href="adminhome.php" style="color:blue">Get to the login page.....!</a>
    </div>
  </div>
</form>

</body>
</html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once ('searchLIB/config.php');
$table='admins';
// $crd->comparing_data($table);
//echo'<pre>';
//print_r($result);
?>



<?php  
 session_start();  
 try  
 { 
      if(isset($_POST["login_ad"]))  
      {  
           if(empty($_POST["emailad"]) || empty($_POST["pwdad"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM admins WHERE emailad = :emailad AND pwdad = :pwdad";  
                $statement = $db_con->prepare($query);  
                $statement->execute(  
                     array(  
                          'emailad'     =>     $_POST["emailad"],  
                          'pwdad'     =>     $_POST["pwdad"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["emailad"] = $_POST["emailad"];  
                     header("location:admn1.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }
      }}  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript" src="main.js"></script>
<title>ADMIN</title>
</head>
<body>
<p class="abc">INDIAN RAILWAYS</p>
<div class="container">
<p class="abc1">ADMIN LOGIN</p>
<?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
  <form action="" method="POST">
    <label for="uname">EMAIL</label>
    <input type="text" id="user" name="emailad" placeholder="Your name..">
	<label for="lname">PASSWORD</label>
    <input type="password" id="pwd" name="pwdad" placeholder="Password">
    <input type="submit" value="login" id="login_ab" name="login_ad"/>
    <script type="text/javascript" src="main.js"></script>
  </form>
<a href="adminsignup.php" style="color:dodgerblue">create new account..?</a>
</div>
<script type="text/javascript" src="main.js"></script>
</body>
</html>
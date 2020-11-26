
<?php
 session_start();  
if (!isset($_SESSION["emailad"]))
 {  
    header("location:adminhome.php"); 
 }  

?>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once 'searchLIB/config.php';
$table='train_details';
$result=$crd->fetch_booking_data($table);
//echo'<pre>';
//print_r($result);
?>


<html lang="en">

<head>
  <title>booking status</title>
  <link rel="stylesheet" href="booksts.css">
</head>

<body>

  <div class="container">
    <h2>TRAIN Details</h2>

    <table>
      <thead>
        <tr>
          <th>TRAIN NO.</th>
          <th>TRAIN NAME</th>
          <th>FROM</th>
          <th>TO</th>
          <th>DATE</th>
          <th>TIME</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $value){?>
        <tr>
          <th><?php echo $value['train_no'];?></td>
          <td><?php echo $value['train_name'];?></td>
          <td><?php echo $value['from_ab'];?></td>
          <td><?php echo $value['to_cd'];?></td>
          <td><?php echo $value['date_cd'];?></td>
          <td><?php echo $value['time_cd'];?></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="admn1.php"><button>BACK</button></a>
  </div>

</body>

</html>
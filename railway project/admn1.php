<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
                body{
  border-radius: 5px;
  background-image: url("strt.jpg");
  font-family: "Comic Sans MS", cursive, sans-serif;
  width: auto;
  height: 100vh;
  background-size: cover;
  padding: 20px;
        }
        .logoutab {
	background-color:rgb(255, 1, 1);
	border-radius: 50%;
	text-align: center;
	cursor: pointer;
	float:right;
	width:6%;
	padding:10px;
	text-shadow: 3px -1px 6px black;
}
.logoutab:hover {
	background-color: aliceblue;
}
    .adtrn{
        background-color: #36baba;
            height: 66px;
            width: 150px;
            transform: translate(568px, 290px);
            border-radius: 10px;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 17px;
    }
    </style>
</head>
<body>
    <a href="addtrn.php"><button class="adtrn">ADD TRAIN</button></a>
    <a href="bookngsts.php"><button class="adtrn">booked status</button></a>
    <a href="paymentdetails.php"><button class="adtrn">payment details</button></a>
   <a href="startpage.html"> <button class="logoutab">logout</button>
</body>
</html> -->
<?php
 session_start();  
if (!isset($_SESSION["emailad"]))
 {  
    header("location:adminhome.php"); 
 }  

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="homepage.css">
    <script type="text/javascript" src="homepage.js"></script>
    <title>
       ADMIN HOME
    </title>
</head>

<body>
    <div class="headerCntr">
        <img src="https://www.irctc.co.in/nget/assets/images/secondry-logo.png" class="headerImgRight" alt="" srcset="">
       <p class="header">INDIAN RAILWAYS</p>
        <img src="https://www.irctc.co.in/nget/assets/images/logo.png" class="headerImgLeft" alt="" srcset="">
        <div class="clear"></div>
    </div>

    <table border="0" width="100%" height="8%">
        <tr>
            <a href="admn1.php"><button class="menubar">HOME</button></a>
            <a href="addtrn.php"><button class="menubar" >ADD TRAIN</button></a>
            <a href="bookngsts.php"><button class="menubar">PAS. BOOKED STATUS</button></a>
            <a href="adtrain_details.php"><button class="menubar">TRAIN DETAILS</button></a>
            <!-- <a href="about.php"><button class="menubar">about</button></a> -->
            <a href="paymentdetails.php"><button class="menubar">PAYMENT DETAILS</button></a>
            <a href="contact.html"><button class="menubar">CONTACT US</button></a>
            <a href="adlogout.php"><button class="logoutab"><--LOGOUT</button></a>
        </tr>
    </table>
    <div class="slide" style="max-width:500px">
        <img class="mySlides" src="1.jpg" style="width:100%">
        <img class="mySlides" src="2.jpg" style="width:100%">
        <img class="mySlides" src="3.jpg" style="width:100%">
        <img class="mySlides" src="4.jpg" style="width:100%">
        <img class="mySlides" src="5.jpg" style="width:100%">
    </div>
    <script type="text/javascript" src="homepage.js"></script>
    <marquee class="movintxt" direction="up">Rail transport or train transport is a means of transferring passengers and goods on wheeled vehicles running on rails, which are located on tracks. In contrast to road transport, where vehicles run on a prepared flat surface, rail vehicles (rolling stock) are directionally guided by the tracks on which they run. Tracks usually consist of steel rails, installed on ties (sleepers) set in ballast, on which the rolling stock, usually fitted with metal wheels, moves. Other variations are also possible, such as slab track. This is where the rails are fastened to a concrete foundation resting on a prepared subsurface.
        Rolling stock in a rail transport system generally encounters lower frictional resistance than rubber-tired road vehicles, so passenger and freight cars (carriages and wagons) can be coupled into longer trains. The operation is carried out by a railway company, providing transport between train stations or freight customer facilities. Power is provided by locomotives which either draw electric power from a railway electrification system or produce their own power, usually by diesel engines. Most tracks are accompanied by a signalling system. Railways are a safe land transport system when compared to other forms of transport.[Nb 1] Railway transport is capable of high levels of passenger and cargo utilization and energy efficiency, but is often less flexible and more capital-intensive than road transport, when lower traffic levels are considered.
    </marquee>
</body>

</html>
<?php
 session_start();  
if (!isset($_SESSION["email"]))
 {  
    header("location:main.php"); 
 }  
 ?>
<html>
    <head>
        <title>About</title>
        <style>
            * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background-color: #A9C9FF;
	background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);
	font-family: "Comic Sans MS", cursive, sans-serif;
    padding: 20px;
    text-align:center;

}
.mySlides {
	display: none;
	align :center;
	height: 40%;
	width: 30%;
}

.slide {
	align:center;
    height: 130%;
    display:inline-block;
}
            </style>
    </head>
    <body>
        <p>RAILWAY MANAGEMENT SYSTEM</p>
        <p>1.bookticket</p>
        <p>2.booking status</p>
        <p>3.train details</p>
        <div class="slide" style="max-width:500px">
        <img class="mySlides" src="d.jpg" style="width:100%">
        <img class="mySlides" src="a.jpg" style="width:100%">
        <img class="mySlides" src="b.jpg" style="width:100%">
        <img class="mySlides" src="c.jpg" style="width:100%">
        <img class="mySlides" src="homepagebackground.jpg" style="width:100%">
    </div>
    <script type="text/javascript" src="homepage.js"></script>
</body>

</html>
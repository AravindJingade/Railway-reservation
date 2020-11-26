
<?php
session_start();  
if (!isset($_SESSION["email"]))
{  
   header("location:main.php"); 
}  

?>
<html>
    <head>
        CONTACT INFO
        <link rel="stylesheet" type="text/css" href="contact.css">
        <title>
            CONTACT US :
        </title>
        </head>
        <body>
            <p> 1.ARAVIND JINGADE</br>
            5th sem CSE</br>
            STJ INSTITUTE OF TECHNOLOGY</br></p>
            </br>
    </body>
    </html>
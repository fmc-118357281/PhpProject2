<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="EbusStyle.css" />
    </head>
    <body>
        
        <h1>Tech Head Ltd. Services</h1> 
        
        <hr/>
        <!--  //Starting the session to get session variable from last page-->
        <div>
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue2 = $_POST['txtName'];
$fullEmailValue = $_POST['txtEmail'];
echo "Receipt:";
echo"<br></br>";
echo "The Customer's name is: ".$fullNameValue2.".";
echo"<br></br>";
echo "The Customer's email is: ".$fullEmailValue.".";
echo"<br></br>";
echo "The total value is: €".$totalValue2.".";


?>
            </div>
</body>
</html>



<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$fullEmailValue = "";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtEmail'] = $fullEmailValue;




?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        <link rel="stylesheet" href="EBusStyle.css" type="text/css" />
        <script language="Javascript" type="text/javascript">
            
    /**only allow alphabet in name text box*/        
   function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

   
    </script>
        <div class="form">
            <form name="Details" method="post" action="EBus3.php">
                <h1>Tech Head Ltd. Services</h1>   
        <hr/>
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Please enter your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" onkeypress="return onlyAlphabets(event,this);" type="text" id="txtName" name="txtName" value=""  maxlength="20" /></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" id="txtEmail" name="txtEmail" value="" /></td>
                        </tr>
                        <tr>
                            <td>Pin:</td>
                            <td><input type="password" id="txtPassword" name="txtPin" value="" maxlength="4" </td>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" onkeypress="return isNumber(event)"/></td>
                        </tr>
                       
                    </table>
                </center>
               
                <center>
                   
                    <input type="button" name="btnBack" id="btnBack" onclick="window.location.href= 'EBus1.php'" value="Back"/>
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Proceed to Purchase"/>
                    
                   
                </center>
        </div>
</form>
    </body>
</html>
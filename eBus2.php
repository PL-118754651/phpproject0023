<?php
session_start();
$fullNameValue = "";
$totalValue2="";
$mobileValue="";
/*
 * * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        $_SESSION['txtNum'] = $mobileValue;
       
 ?>     
<!DOCTYPE html>
        <html>
            <HEAD>
                <TITLE>Personal Details</TITLE>
            </HEAD>
             <link rel="stylesheet" href="Ebusiness.css" type="text/css" />
             <style>
                   body {
 background-image: url("white.jpg");
}

</style>
            <body>
                <a href ="ebus1.php">Back</a>
                <div class ="form">
                   
                    <form name =" Details" method="post" action="ebus3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Please Enter your Details Below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value="" required/></td> 
                                </tr>
                                 <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" id="txtNum" name="txtNum" value="" required/></td> 
                                </tr>
                                 <tr>
                                    <td>PIN</td>
                                    <td><input type="password" id="txtPassword" name="txtPassword" value="" required/></td>
                                </tr>
                                 <script> 
                                     function myFunction() {
                                         var x = document.getElementById("txtPassword");
                                         if (x.type === "password"){
                                             x.type = "text";
                                         } else {
                                             x.type = "Password"
                                         }
                                     }
                                    </script
                                
                                <tr>                              
                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue ;?>"/></td> 
                                </tr>
                            </table>
                        </center>
                        
                        <center>
                            <input type="submit" name="btnContinue" id="btnContinue" oneclick="" value="Continue"/>
                        </Center>
                    </form>
                </div>
            </body>

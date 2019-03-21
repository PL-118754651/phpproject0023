
<!DOCTYPE html>
<html>
    <head>
        <title> Purchase Receipt</title>
        <link rel="stylesheet" type="text/css" href="ebus2.php." />
    </head>
    <style>
                   body {
 background-image: url("white.jpg");
}
</style>
    <body>
        <h1><center> Purchase Receipt </center></h1>
        <a href ="ebus2.php">Back</a>
    <center>
        <?php
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue =$_POST['txtName'];
        $mobileValue =$_POST['txtNum'];
        
                echo "<br></br>";
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " Mobile:".$mobileValue.".";
                echo "<br></br>";
                echo " The payment needed is  " .$totalValue2.".";
        ?>
        </center>   
    
    <br><center><button onclick="myFunction()">Print Receipt</button></center>

        <script>
            function myFunction() {
            window.print();
                }
        </script>
    </body>
</html>
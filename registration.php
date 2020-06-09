<?php

   $host= "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname= "blood";
    
   //create connection
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

?>
<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$blood_group = $_POST['blood_group'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$zone=$_POST['zone'];
$last_donated = $_POST['last_donated'];
?>
<!-- put ur sql query below-->
<?php
$sql = "INSERT INTO resistration(name, dob, weight, height, blood_group,telephone,address,zone,last_donated)
        VALUES('$name', '$dob','$weight','$height','$blood_group','$telephone','$address','$zone','$last_donated')";

        if(mysqli_query($conn,$sql))
        {
        	header("Location:ts.php");//index.html is the next page after registeration.U can use the same page instead
        }
        else
        {
        	echo mysqli_error($conn);
        }
?>
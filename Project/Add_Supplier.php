<?php



include "dbh.php";



$Name    = $_POST['Name'];
$SupplierID  = $_POST['IndustryID'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];



echo $Name."<br>";
echo $SupplierID."<br>";
echo $Phone  ."<br>";
ECHO $Address."<br>";


$sql = "INSERT INTO supplier_information
		VALUES('$SupplierID','$Name','$Address','$Phone ')";

$result = mysqli_query($conn,$sql);


header("Location:Add_Suppliers.php");

$stmt = $conn_prepare($sql);


$stmt_bind_param("sssss",$customerID,$name,$Address,$loginID,$password);


$stmt_execute();


?>

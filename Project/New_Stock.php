<?php



include "dbh.php";



$StockID    = $_POST['StockID'];
$Stockname    = $_POST['Stockname'];
$CatID    = $_POST['CatID'];
$SupID    = $_POST['SupplierID'];
$Quantity  = $_POST['Quantity'];
$Cost= $_POST['Cost'];
$sell = $_POST['sell'];
$ROL   = $_POST['ROL'];

echo $sell;


$sql = "INSERT INTO product	VALUES('$StockID','$Stockname','$CatID','$SupID','$Quantity','$Cost','$ROL')";

$result = mysqli_query($conn,$sql);

$sql1 = "INSERT INTO price_list VALUES('$StockID','$sell')";
$result = mysqli_query($conn,$sql1);

header("Location:Update_Stocks.php");

$stmt = $conn_prepare($sql);


$stmt_bind_param("sssss",$customerID,$name,$Address,$loginID,$password);


$stmt_execute();


?>

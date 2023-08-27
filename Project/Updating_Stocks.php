<?php



include "dbh.php";



$StockID    = $_POST['StockID1'];
$Stockname    = $_POST['Stockname1'];
$CatID    = $_POST['CatID1'];
$SupID    = $_POST['SupplierID1'];
$Quantity  = $_POST['Quantity1'];
$Price = $_POST['Price1'];
$ROL   = $_POST['ROL1'];

if(isset($_POST('CatID1'))){
	$sql = "UPDATE  product
					SET	Category = '$CatID'
					WHERE ProductID = '$StockID'";
	
	$result = mysqli_query($conn,$sql);

}


header("Location:WholeSaler-Login.html");

$stmt = $conn_prepare($sql);


$stmt_bind_param("sssss",$customerID,$name,$Address,$loginID,$password);


$stmt_execute();


?>

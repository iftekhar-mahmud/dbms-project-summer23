<?php


include "dbh.php";



$customerID   = $_POST['CustomerID'];
$ProductID    = $_POST['ProductID'];
$Quantity  = $_POST['Quantity'];
$TotalAmt = $_POST['TotalAmount'];
$AmtPaid = $_POST['AmountPaid'];
$BalAmt = $_POST['BalanceAmount'];
$Trans_Init_Date  = $_POST['Trans_Int_Date'];


echo $customerID."<br>";
echo $ProductID."<br>";
echo $TotalAmt."<br>";
echo $AmtPaid ."<br>";
ECHO $BalAmt."<br>";

$sql1 = "INSERT INTO transaction_information(customerID,Trans_Init_Date)
		VALUES('$customerID','$Trans_Init_Date')";

$result = mysqli_query($conn,$sql1);

$sql2 = "INSERT INTO payments(ProductID,Quantity,Total_Amount,Trans_Init_Date)
		VALUES('$ProductID','$Quantity','$TotalAmt','$Trans_Init_Date')";




$sql = "INSERT INTO Customer_Info(Customer_ID,Name,Address,Login_ID,Password)
		VALUES('$customerID','$Cname','$Address','$loginID','$password')";

$result = mysqli_query($conn,$sql);

header("Location:WholeSaler-Login.html");

$stmt = $conn_prepare($sql);


$stmt_bind_param("sssss",$customerID,$name,$Address,$loginID,$password);


$stmt_execute();

header("Location:Add_Transaction.php");
?>

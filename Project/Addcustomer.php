<?php



$conn = mysqli_connect("localhost","student","student","dbms");
echo "Connected to the database of the host...."."<br>";

if (!$conn)
	{
		die("Connection is failed: ".mysqli_connect_error());
	}

$mysqli  = new mysqli("localhost","student","student","dbms");


$Cname = $_POST['Cname'];
$customerID   = $_POST['CustomerID'];
$Phone    = $_POST['Phone'];
$password  = $_POST['Password'];
$Address = $_POST['Address'];

echo $Cname."<br>";
echo $customerID."<br>";
echo $Phone."<br>";
echo $password."<br>";
echo $Address."<br>";



$sql = "INSERT INTO Customer_information(CustomerID,Name,Address,Phone,Password)
		VALUES('$customerID','$Cname','$Address','$Phone','$password')";


$result = mysqli_query($conn,$sql) or die("Error: $sql. ".mysqli_error($conn));



$sql = "INSERT INTO Customer_Info(Customer_ID,Name,Address,Login_ID,Password)
		VALUES(?,?,?,?,?)";

$stmt = $mysqli_prepare ("INSERT INTO Customer_Info(Customer_ID,Name,Address,Login_ID,Password)
		VALUES(?,?,?,?,?)");

$stmt_bind_param("sssss",$customerID,$name,$Address,$loginID,$password);


$stmt_execute();

$stmt->bint_result($abc,$asd);
header("Location:WholeSaler-Login.php");
?>

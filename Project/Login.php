<?php
if(isset($_POST["Login"]))
{
    session_start();

    $conn = mysqli_connect("localhost","student","student","dbms");
    echo "Connected to the database of the host...."."<br>";

    if (!$conn)
    {
        die("Connection is failed: ".mysqli_connect_error());
    }

    $loginname = $_POST['userid'];
    $loginpass = $_POST['pass'];

    if ($loginname == "Admin" && $loginpass == "Admin"){
        $_SESSION['Login']="Active";
        header("Location: WholeSaler-Login.php");
    }
    else {
        $sql = "SELECT * FROM customer_information WHERE CustomerID = '$loginname' and Password = '$loginpass'";
        $result = mysqli_query($conn, $sql);

        if(!$row = mysqli_fetch_assoc($result))
        {
            echo "Your UserName or password is incorrect";
            $_SESSION["pass"]="False";
			
            header("Location: LoginPage.php");
        }
        else
        {
            $_SESSION['Login']="Active";
            $_SESSION['CID']=$row['CustomerID'];
            header("Location: CustomerLogin.php");
        }
    }
}
?>

<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabtest084.mysql.database.azure.com', 'thanee@itflabtest084', 'Yongyong0', 'itflabtest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];
$discounted = ($Price * $Discount)/100;
$Total = $Price - $discounted;


$sql = "INSERT INTO Information (Product, Price, Discount, Total) VALUES ('$Product', '$Price', '$Discount', '$Total')";


if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

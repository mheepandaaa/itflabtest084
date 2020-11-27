<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabtest084.mysql.database.azure.com', 'thanee@itflabtest084', 'Yongyong0', 'itflabtest', 3306);
$Price=$_POST['Price'];
$Discount=$_POST['Discount'];
$sql="UPDATE Information SET Price='$Price',Discount='$Discount', WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
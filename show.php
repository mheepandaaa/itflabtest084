<html>
<head>
    <title>ITF Lab06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--css-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
    <body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabtest084.mysql.database.azure.com', 'thanee@itflabtest084', 'Yongyong0', 'itflabtest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM Information');
?>
<br>
<div class="container" bg-white mx-auto rounded-lg shadow mt-3 p-4 mb-3">
    <table class = "table table-bordered table-hover" width="1500" align="center" border="1">
        <thead class="thead-dark">
    <tr>
        <th width="300"> <div align="center">ชื่อสินค้า</div></th>
        <th width="300"> <div align="center">ราคาต่อหน่วย </div></th>
        <th width="300"> <div align="center">ส่วนลด(%) </div></th>
        <th width="300"> <div align="center">ราคาหลังลด</div></th>
        <th width="300"> <div align="center">การจัดการ</div></th>
    </tr>
    </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
        <tbody>
                <tr>
            <td><?php echo $Result['Product'];?></td>
            <td><?php echo $Result['Price'];?></td>
            <td><?php echo $Result['Discount'];?></td>
            <td><?php echo $Result['Total'];?></td>
            <td align="center">
                <a href="edit.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-success" >EDIT</a>
                </tr>
        </tbody>
<?php
}
?>
    </table>
    <button type="button" class="btn btn-outline-warning" onclick ="window.location.href='form.html'">ADD</button> 
<?php
mysqli_close($conn);
?>
    </body>
</html>

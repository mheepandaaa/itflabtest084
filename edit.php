<!DOCTYPE html>
<html>
<head>
  <title>Edit Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
    <?php
    $id=$_GET['ID'];
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itflabtest084.mysql.database.azure.com', 'thanee@itflabtest084', 'Yongyong0', 'itflabtest', 3306);
    $res = mysqli_query($conn, "SELECT * FROM Information WHERE ID='$id'");
    $row = mysqli_fetch_array($res)
    ?>
    <div class="container">
    <h2>Edit Form</h2>
    <form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
        <label for="Username">Price :</label>
          <input type="text" class="form-control" name = "Price" id="idPrice" value="<?php echo "$row[Price]"; ?>" <br>
        <label for="Username">Discount :</label>
          <input type="text" class="form-control" name = "Discount" id="idDiscount" value="<?php echo "$row[Discount]"; ?>"> <br><br>
          <input type="submit" id="commentBtn"class="btn btn-outline-warning">
    </div>
      </form>
</body>
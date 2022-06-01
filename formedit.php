<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>แก้ไขข้อมูลลูกค้า</title>
</head>
<?php
include("config/connect_db.php");
$customer_id = $_GET['customer_id'];
$stmt = $conn->prepare("SELECT * FROM customer WHERE customer_id = :customer_id");
$stmt->execute([':customer_id' => $customer_id]);
$row1 = $stmt->fetch();
?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4"> <br>
        <h4>ฟอร์มแก้ไขข้อมูลลูกค้า</h4>
        <form action="edit_db.php" method="post">
          <div class="mb-2">
            <label for="name_ct" class="col-sm-2 col-form-label"> ชื่อ:</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="name_ct" id="name_ct" value="<?= $row1['name_ct'] ?>">
            </div>
          </div>
          <div class="mb-2">
            <label for="surname_ct" class="col-sm-2 col-form-label"> นามสกุล:</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="surname_ct" id="surname_ct" value="<?=$row1['surname_ct']?>">
            </div>
          </div>
          <div class="mb-2">
            <label for="phone_ct" class="col-sm-2 col-form-label"> เบอร์โทร:</label>
            <div class="col-sm-10">
              <input type="text" name="phone_ct" class="form-control">
            </div>
          </div>
          <div class="mb-2">
            <label for="email_ct" class="col-sm-2 col-form-label"> อีเมล:</label>
            <div class="col-sm-10">
              <input type="text" name="email_ct" class="form-control">
            </div>
          </div>
          <div class="mb-2">
            <label for="adress_ct" class="col-sm-2 col-form-label"> ที่อยู่:</label>
            <div class="col-sm-10">
              <input type="text" name="adress_ct" class="form-control">
            </div>
          </div>
          <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
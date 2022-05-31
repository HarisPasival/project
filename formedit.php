<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>แก้ไขข้อมูลลูกค้า</title>
  </head>
  <body>
    <?php
    if(isset($_GET['customer_id'])){
      require_once 'config/connect_db.php';
      $stmt = $conn->prepare("SELECT* FROM customer WHERE customer_id=?");
      $stmt->execute([$_GET['customer_id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
      if($stmt->rowCount() < 1){
          header('Location: index.php');
          exit();
      }
    }//isset
    ?>

  </body>
</html>
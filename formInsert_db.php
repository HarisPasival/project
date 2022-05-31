<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
    if(isset($_POST['name_ct']) && isset($_POST['surname_ct']) && isset($_POST['phone_ct']) && isset($_POST['email_ct']) && isset($_POST['adress_ct'])){
    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'config/connect_db.php';
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $name_ct = $_POST['name_ct'];
    $surname_ct = $_POST['surname_ct'];
    $phone_ct = $_POST['phone_ct'];
    $email_ct = $_POST['email_ct'];
    $adress_ct = $_POST['adress_ct'];
    //sql insert
    $stmt = $conn->prepare("INSERT INTO customer (name_ct, surname_ct, phone_ct, email_ct, adress_ct)
    VALUES (:name_ct, :surname_ct, :phone_ct, :email_ct, :adress_ct)");
    $stmt->bindParam(':name_ct', $name_ct, PDO::PARAM_STR);
    $stmt->bindParam(':surname_ct', $surname_ct , PDO::PARAM_STR);
    $stmt->bindParam(':phone_ct', $phone_ct , PDO::PARAM_STR);
    $stmt->bindParam(':email_ct', $email_ct , PDO::PARAM_STR);
    $stmt->bindParam(':adress_ct', $adress_ct , PDO::PARAM_STR);
    $result = $stmt->execute();
     // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if($result){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
    $conn = null; //close connect db
    } //isset
    ?>

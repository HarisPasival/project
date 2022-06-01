<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>หน้าแรก</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
                <h3>รายการข้อมูลลูกค้า <a href="formInsert.php" class="btn btn-success float-end">+เพิ่มข้อมูล</a> </h3>
                <table class="table table-striped  table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">ลำดับ</th>
                            <th width="25%">ชื่อ</th>
                            <th width="25%">นามสกุล</th>
                            <th width="25%">เบอร์โทร</th>
                            <th width="8%">รายละเอียด</th>
                            <th width="5%">แก้ไข</th>
                            <th width="5%">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //คิวรี่ข้อมูลมาแสดงในตาราง
                        require_once 'config/connect_db.php';
                        $sql = "SELECT*FROM customer";
                        $stmt = $conn->query($sql);
                        while ($row = $stmt->fetch()) {
                        ?>
                            <tr>
                                <td><?= $row['customer_id']; ?></td>
                                <td><?= $row['name_ct']; ?></td>
                                <td><?= $row['surname_ct']; ?></td>
                                <td><?= $row['phone_ct']; ?></td>
                                <td><a href="#" class="btn btn-info btn-sm">รายละเอียด</a></td>
                                <td><a href="formedit.php?customer_id=<?php echo  $row['customer_id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="#" class="btn btn-danger btn-sm">ลบ</a></td>
                                <!-- <td><a href="formEdit.php?id=<?= $k['id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="del.php?id=<?= $k['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
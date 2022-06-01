<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>เพิ่มข้อมูลลูกค้า</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"> <br>
                <h4>ฟอร์มเพิ่มข้อมูลลูกค้า</h4>
                <form action="formInsert_db.php" method="post">
                    <div class="mb-2">
                        <label for="name_ct" class="col-sm-2 col-form-label"> ชื่อ:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_ct" class="form-control" id="name_ct" required placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="surname_ct" class="col-sm-2 col-form-label"> นามสกุล:</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname_ct" class="form-control" id="surname" required placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="phone_ct" class="col-sm-2 col-form-label"> เบอร์โทร:</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone_ct" class="form-control" id="phone_ct" required placeholder="เบอร์โทร">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="email_ct" class="col-sm-2 col-form-label"> อีเมล:</label>
                        <div class="col-sm-10">
                            <input type="text" name="email_ct" class="form-control" id="email_ct" required placeholder="อีเมล">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="adress_ct" class="col-sm-2 col-form-label"> ที่อยู่:</label>
                        <div class="col-sm-10">
                            <input type="text" name="adress_ct" class="form-control" id="adress_ct" required placeholder="ที่อยู่">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
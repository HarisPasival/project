  <?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "project_com";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connection succesfully: ";
    } catch (PDOException $e) {
        echo "connection failed: ", $e->getMessage();
    }
?>
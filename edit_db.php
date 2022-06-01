<?php
$customer_id = $_POST['customer_id'];
$name_ct = $_POST['name_ct'];
$surname_ct = $_POST['surname_ct'];
$phone_ct= $_POST['phone_ct'];
$email_ct = $_POST['email_ct'];
$adress_ct = $_POST['adress_ct'];

$data = [
  'customer_id' => $customer_id,
  'name_ct' => $name_ct,
  'surname_ct' => $surname_ct,
  'phone_ct' => $phone_ct,
  'email_ct' => $email_ct,
  'adress_ct' => $adress_ct,
];

require 'config/connect_db.php';
$sql = "UPDATE customer SET name_ct = :name_ct, surname_ct = :surname_ct, phone_ct = :phone_ct, email_ct = :email_ct, adress_ct = :adress_ct WHERE customer_id = :customer_id";
$stmt = $conn->prepare($sql);
$stmt->execute($data);
header('Location: index.php');

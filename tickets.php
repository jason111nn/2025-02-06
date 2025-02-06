<?php
header('Content-Type: application/json');

$dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
$conn = new PDO($dsn, "admin", "1234");

$sql = "INSERT INTO `tickets` (`first-name`, `last-name`, `password`, `phone`) 
        VALUES ('{$_POST['first-name']}', '{$_POST['last-name']}', '{$_POST['password']}', '{$_POST['phone']}')";

$stmt = $conn->prepare($sql);
$stmt->execute();

echo json_encode(["success" => "成功!"]);
?>

<?php
$host = 'localhost'; // أو اسم السيرفر
$dbname = 'ischool';
$username = 'root'; // اسم المستخدم
$password = ''; // كلمة المرور

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

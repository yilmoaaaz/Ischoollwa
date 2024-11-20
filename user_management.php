<?php
// تسجيل الدخول
function login($email, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// إضافة مستخدم جديد
function addUser($fullName, $email, $password, $role) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO users (fullName, email, password, role) VALUES (:fullName, :email, :password, :role)");
    $stmt->execute(['fullName' => $fullName, 'email' => $email, 'password' => $password, 'role' => $role]);
}
?>

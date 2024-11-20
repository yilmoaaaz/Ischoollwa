<?php
// تسجيل نشاط جديد
function logActivity($message) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO activities (message) VALUES (:message)");
    $stmt->execute(['message' => $message]);
}
?>

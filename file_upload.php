<?php
// رفع ملف
function uploadFile($file) {
    global $pdo;
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $uploadedBy = $_SESSION['user_email']; // استخدم البريد الإلكتروني للمستخدم المسجل
    $stmt = $pdo->prepare("INSERT INTO files (name, size, uploadedBy) VALUES (:name, :size, :uploadedBy)");
    $stmt->execute(['name' => $fileName, 'size' => $fileSize, 'uploadedBy' => $uploadedBy]);
}
?>

<?php
header('Content-Type: application/json');
include '../db.php';

$nama = $_POST['nama'] ?? '';
if (!$nama) {
  echo json_encode(['success'=>false, 'message'=>'Nama kategori kosong']); exit;
}
$stmt = $pdo->prepare("INSERT INTO kategori (nama) VALUES (?)");
$success = $stmt->execute([$nama]);
echo json_encode(['success'=>$success]);
?>
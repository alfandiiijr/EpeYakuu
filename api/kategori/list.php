<?php
header('Content-Type: application/json');
include '../db.php';

$stmt = $pdo->query("SELECT * FROM kategori ORDER BY nama ASC");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(['data'=>$data]);
?>
<?php

include 'db.php';

header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET"); 
header('Content-Type: application/json');

$stmt = $pdo->prepare("SELECT username, score FROM players ORDER BY score DESC");
$stmt->execute();
$players = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($players);

?>

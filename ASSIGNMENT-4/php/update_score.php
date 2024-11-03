<?php
session_start();

header("Access-Control-Allow-Origin: *"); // Allows all domains
header("Access-Control-Allow-Methods: POST"); // Allows POST requests
header("Access-Control-Allow-Headers: Content-Type"); 
require 'db.php';

if (isset($_SESSION['player_id'])) {
    $player_id = $_SESSION['player_id'];
    $new_score = $_POST['score'];

    $stmt = $pdo->prepare("UPDATE players SET score = ? WHERE player_id = ?");
    $stmt->execute([$new_score, $player_id]);

    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Not logged in']);
}
?>

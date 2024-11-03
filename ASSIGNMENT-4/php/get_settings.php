<?php
require 'db.php';

$stmt = $pdo->prepare("SELECT setting_key, setting_value FROM game_settings");
$stmt->execute();
$settings = [];

while ($row = $stmt->fetch()) {
    $settings[$row['setting_key']] = $row['setting_value'];
}

echo json_encode($settings);
?>

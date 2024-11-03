<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $difficulty = $_POST['difficulty'];
    $speed = $_POST['speed'];
    $theme = $_POST['theme'];

    $settings = [
        'difficulty' => $difficulty,
        'speed' => $speed,
        'theme' => $theme
    ];

    foreach ($settings as $key => $value) {
        $stmt = $pdo->prepare("INSERT INTO game_settings (setting_key, setting_value) 
            VALUES (:key, :value) ON DUPLICATE KEY UPDATE setting_value = :value");
        $stmt->execute(['key' => $key, 'value' => $value]);
    }

    echo json_encode(['status' => 'success']);
}
?>

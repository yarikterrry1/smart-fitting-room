<?php
$data = json_decode(file_get_contents("php://input"), true);

// Создаём папку, если её нет
if (!file_exists('outfits')) {
    mkdir('outfits', 0777, true);
}

// Генерируем уникальное имя файла: outfits/outfit_20250803_123456.json
$filename = 'outfits/outfit_' . date('Ymd_His') . '.json';

file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));

echo "Образ сохранён в $filename!";
?>

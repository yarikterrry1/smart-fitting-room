<?php
header('Content-Type: application/json');
echo json_encode([
  ["layer" => "dress", "src" => "items/dress1.png", "name" => "Платье"],
  ["layer" => "hat", "src" => "items/hat1.png", "name" => "Шляпа"],
  ["layer" => "top", "src" => "items/top1.png", "name" => "Топ"],
  ["layer" => "jacket", "src" => "items/jacket1.png", "name" => "Куртка"],
  ["layer" => "shoes", "src" => "items/shoes1.png", "name" => "Обувь"]
]);

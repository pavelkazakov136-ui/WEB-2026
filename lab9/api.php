<?php
require_once 'db.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method !== 'POST') {
    http_response_code(405);
    echo 'Only POST allowed';
    exit();
}

$data = json_decode($_POST['data'] ?? '', true);

if (!$data) {
    http_response_code(400);
    echo 'Ошибка: некорректный JSON';
    exit();
}

if (empty($data['user_id']) || empty($_FILES['image'])) {
    http_response_code(400);
    echo 'Ошибка: не хватает данных';
    exit();
}

$image = $_FILES['image'];
$imageName = uniqid('img_') . '_' . basename($image['name']);
$imagePath = 'images/' . $imageName;
move_uploaded_file($image['tmp_name'], $imagePath);

$connection = connectDatabase();

$query = 'INSERT INTO post (user_id, likes, post_text) VALUES (:user_id, :likes, :post_text)';
$statement = $connection->prepare($query);
$statement->execute([
    ':user_id' => $data['user_id'],
    ':likes' => $data['likes'] ?? 0,
    ':post_text' => $data['post_text'] ?? '',
]);
$postId = (int)$connection->lastInsertId();

$query = 'INSERT INTO post_image (post_id, image) VALUES (:post_id, :image)';
$statement = $connection->prepare($query);
$statement->execute([
    ':post_id' => $postId,
    ':image' => $imagePath,
]);

echo "Пост создан, id = $postId";
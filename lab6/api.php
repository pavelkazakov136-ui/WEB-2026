<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    foreach ($data as $key => $value) {
        $image = file_get_contents($value);
        file_put_contents("./static/image.svg", $image);
        echo "Сохранено: {$key} = {$value}";
    }
}
else {
    echo 'Only POST allowed';
}
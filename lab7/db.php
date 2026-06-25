<?php

function connectDatabase(): PDO
{
    $dsn = 'mysql:host=localhost;dbname=blog';  
    $user = 'root';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    return new PDO($dsn, $user, $password, $options);
}

function getPostImages(PDO $connection, int $postId): array
{
    $query = "SELECT image FROM post_image WHERE post_id = $postId";
    $statement = $connection->query($query);
    return $statement->fetchAll();
}

function getAllPosts(PDO $connection): array
{
    $query = <<<SQL
        SELECT  
            post.id,
            users.username AS author,
            users.avatar,
            post.likes,
            post.post_text AS text,
            post.posted_at,
            post.user_id
        FROM post
        JOIN users ON post.user_id = users.id
        ORDER BY post.id DESC
        SQL;
    $statement = $connection->query($query);
    return $statement->fetchAll();
}

function getPostById(PDO $connection, int $id): ?array
{
    $query = <<<SQL
        SELECT
            post.id,
            users.username AS author,
            users.avatar,
            post.likes,
            post.post_text AS text,
            post.posted_at,
            post.user_id
        FROM post
        JOIN users ON post.user_id = users.id
        WHERE post.id = $id
        SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch();
    return $row ?: null;
}
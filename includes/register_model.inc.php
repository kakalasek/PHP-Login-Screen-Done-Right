<?php

declare(strict_types=1);

function getUsername(object $pdo, string $username){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PFO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $username, string $passwd){
    $query = "INSERT INTO users (username, password) VALUES (:username, :passwd);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($passwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam("passwd", $hashedPwd);
    $stmt->execute();
}
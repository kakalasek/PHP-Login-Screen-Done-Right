<?php

declare(strict_types=1);

function getUsername(object $pdo, string $username){
    $query = "SELECT username FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PFO::FETCH_ASSOC);
    return $result;
}
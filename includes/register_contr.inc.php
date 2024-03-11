<?php

declare(strict_types=1);

function isInputEmpty(string $username, string $passwd): bool{
    if (empty($username) || empty($passwd)){
        return true;
    }
    return false;
}

function isUsernameTaken(object $pdo, string $username): bool{
    if (getUsername($pdo, $username)) {
        return true;
    }
    return false;
}

function createUser(object $pdo, string $username, string $passwd){
    setUser($pdo, $username, $passwd);
}
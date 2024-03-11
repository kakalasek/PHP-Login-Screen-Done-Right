<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    try {

        require_once 'dbh.inc.php';

        $conn = Dbh::connect();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../register.php");
    die();
}
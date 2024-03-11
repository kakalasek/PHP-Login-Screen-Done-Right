<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    try {

        require_once 'dbh.inc.php';
        require_once 'register_model.inc.php';
        require_once 'register_contr.inc.php';

        $conn = Dbh::connect();

        if (isInputEmpty($username, $passwd)){
            
        }

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../register.php");
    die();
}
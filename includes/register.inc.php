<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    try {

        require_once 'dbh.inc.php';
        require_once 'register_model.inc.php';
        require_once 'register_contr.inc.php';

        $conn = Dbh::connect();

        $errors = [];

        if (isInputEmpty($username, $passwd)){
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(isUsernameTaken($conn, $username)){
            $errors["username_taken"] = "Username already taken!";
        }

        require_once "config_session.inc.php";

        if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../register.php");
        }

        createUser();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../register.php");
    die();
}
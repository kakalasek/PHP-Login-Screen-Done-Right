<?php

declare(strict_types=1);

function checkSignupErrors(){
    if(issset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);        
    }
}
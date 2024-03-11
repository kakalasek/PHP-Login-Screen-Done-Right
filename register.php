<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
   
    <h3>Register</h3>

    <form action="includes/register.inc.php" method="post" class="register-form">
        <label for="username">Enter your username:</label>
        <input id="username" type="text" name="username">

        <label for="passwd">Enter your password:</label>
        <input id="passwd" type="text" name="passwd">

        <button>Register</button>
    </form>

    <?php
        checkSignupErrors();
    ?>

</body>
</html>
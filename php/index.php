<?php

// Check if the 'username' and 'email' keys are set in the $_GET array
if (isset($_GET['username']) && isset($_GET['email'])) {
    // Get the username and email from the $_GET array
    $username = htmlspecialchars($_GET['username']);
    $email = htmlspecialchars($_GET['email']);
    if (!empty($email)) {
        // Display the page content
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dabali Chap Chap | Dinor App</title>
        </head>
        <body>
            <h3>Dabali Chap</h3>
            <a href="selectioningredients.php">Cuisinez !</a>
        </body>
        </html>
        <?php
    } else {
        // Redirect the user to the account creation page
        header('Location: accountCreation.php');
        exit;
    }
} else {
    // Redirect the user to the account creation page
    header('Location: accountCreation.php');
    exit;
}
?>

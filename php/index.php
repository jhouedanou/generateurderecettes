<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <?php 
  // Check if the 'username' and 'email' keys are set in the $_GET array
if (isset($_GET['username']) && isset($_GET['email'])) {
    // Get the username and email from the $_GET array
    $username = htmlspecialchars($_GET['username']);
    $email = htmlspecialchars($_GET['email']);

    // Try to connect to the database if $email is not empty
    if (!empty($email)) {
        try {
            $db = new PDO('mysql:host=db;dbname=recettes;charset=utf8', 'user', 'N7f68a&e69E+');
            echo "Connected to database successfully!";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        // Redirect the user to the reserve.php page
        //header('Location: accountCreation.php');
        exit;
    }
} else {
    // Redirect the user to the reserve.php page
    //header('Location: accountCreation.php');
    exit;
}
?>
<?php include('footer.php'); ?>
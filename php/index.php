<?php
$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'ebimpe';
$password = 'N7f68a&e69E+';
$db = 'recettes';

$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MySQL<br />";}
else{
        echo "Connexion à MSSQL ok<br />";
        mysqli_close($conn);
}
?>
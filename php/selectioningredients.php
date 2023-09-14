  <?php 
      try {
            $db = new PDO('mysql:host=db;dbname=recettes;charset=utf8', 'user', 'N7f68a&e69E+');
            echo "Connected to database successfully!";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
   ?>
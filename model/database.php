<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
$username ='testing';
$password = 'testing88';


try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>
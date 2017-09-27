<?php

$host = '';
$password = ;
$username = ;


try{
    $connect = new PDO($host, $username, $password);
    echo 'You are connected';
}
catch(Exception $e){
    $error = $e->getMessage();
    echo "there was an error".$error;

}

$query = 'SELECT Brand, Model
            FROM Bikes
            WHERE categoryID <=10';



$statement = $connect->prepare($query);
$statement->bindValue();
$statement->execute();
$final = $statement->fetchAll();
$statement->closeCursor();


foreach($final as $finals){
    echo $finals['Brand'];
    echo $finals['Model'];
}







?>
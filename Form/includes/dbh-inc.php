<?php 

$dbhost = 'localhost';     
$dbusername = 'root'; 
$dbpassword = ''; 
$dbname = 'triwaydatabase'; 


$dsn="mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4";

try {
    //PHP DATA OBJECTS(PDO) makes a connection into an object
    $pdo= new PDO($dsn,$dbusername,$dbpassword); //creating object pdo

    
    //how to handle error messages 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    //if u get an error throw and exception
} catch (PDOException $e)//catch the exception and name it e
 {
    echo "Connection Failed". $e->getMessage();
} 



if (!$dsn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful
echo "Connected successfully";





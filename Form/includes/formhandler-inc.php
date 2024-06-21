<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"] ;



    try {
        require_once "dbh-inc.php";
            
        $query = "insert into users(fname,lname,email,password) VALUES
        (?,?,?,?);";


        $stmt=$pdo->prepare($query);
        $stmt->execute([$fname,$lname,$email,$pwd]);

        $pdo=null;
        $stmt=null;
        //to display the table after execution
        header("Location:../search.php");

        //if u want to go back to home page after submitiing
        //header("Location:../index.php");
 
        die();//not using exit since there is a connection if connection we use die
    } catch (PDOException $e) {
        
        die("Query failed".$e->getMessage());
        //terminates entire script and stops it from running and gives an error msg
        //concatenate the error msg
    }
}
else{
    
    header("Location:../index.php");
}






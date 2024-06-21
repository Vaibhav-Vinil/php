

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="zohostyles.css">    
</head>
<body class="result">
    <h3>Search Results</h3>


    <!--PHP STARTS HERE-->
    <!--DISPLAYING CONTENTS OF THE TABLE EXCEPT THE PASSWORD-->

    <?php
      require_once "includes/dbh-inc.php";
      $query = "select*from users;";
       $stmt=$pdo->prepare($query);
       $stmt->execute();
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
       $pdo=null;
       $stmt=null;
   
     echo"<table>";
     echo "<tr>";
     echo "<td>"."First Name"."</td>";
     echo "<td>"."Last Name"."</td>";
     echo "<td>"."Email"."</td>";
     echo "</tr>";

    foreach($result as $row){
        echo "<tr>";
        echo "<td>".$row["fname"]."</td>";
        echo "<td>".$row["lname"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";
    }
    echo"</table>";
    echo "<br>";



    //DISPLAYING THE ALL THE PASSWORDS
    echo "<br>";
    echo "LIST OF PASSWORDS IN THE DATABASE";
    require_once "includes/dbh-inc.php";
      
    $pdo= new PDO($dsn,$dbusername,$dbpassword); //creating object pdo
    $querypass = "select password from users;";

     $stmt=$pdo->prepare($querypass);
     $stmt->execute();
     $result2 = $stmt->fetchAll(PDO::FETCH_ASSOC); 
     $pdo=null;
     $stmt=null;
    echo"<table>";
     echo "<tr>";
     echo "<td>"."password"."</td>";
     echo "</tr>";
    foreach($result2 as $row){
        echo "<tr>";
        echo "<td>".$row["password"]."</td>";
        echo "</tr>";
    }
    echo"</table>";
    echo "<br>";
    




    //PREPARED STATEMENTS. FINDING FULL NAME OF PEOPLE WITH FIRST NAME SHAWN

    echo "prepared statements <br>";
    $name="shawn";

    $pdo= new PDO($dsn,$dbusername,$dbpassword); //creating object pdo
    $nameselect = "select * from users where fname=?;";
    $stmt=$pdo->prepare($nameselect);
    $stmt->execute([$name]);
    $result3 = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    $pdo=null;
    $stmt=null;

    
echo"<table>";
foreach($result3 as $row){
    echo "<tr>";
    echo "<td>".$row["fname"]."</td>"."<td>".$row["lname"]."</td>";
    echo "</tr>";
}
echo"</table>";

    

    ?>
    
</body>
</html>
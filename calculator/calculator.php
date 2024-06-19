<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="stylescalc.css"/></head>
<body> 
    
<h1>Calculator</h1>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="post"> 
<input type="number" name="num1" placeholder="NUM1" required> 
<br>

<select name="operator" placeholder="operation">
<option value="add" default>+</option>
<option value="subtract">-</option>
<option value="multiply">x</option>
<option value="divide">/</option>
</select>




<br>

<input type="number" name="num2" placeholder="NUM2" required>
<br>

<button>CALCULATE!</button>

</form>


<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator=htmlspecialchars($_POST["operator"]);




    //check for error (if htm is changed in browser to accept null value)
    $error=false;
   
    if ($operator == "divide" && $num2 == 0) {
        echo '<div class="result">Result: Division by Zero error!</div>';
        $error = true;
        exit();
      }



  








    if((empty($num1)&& $num1!=0) || (empty($num2)&& $num2!=0)){  
        echo '<div class="result">Result: ' .  "html manipulated error u made it unrequired <br>". "</div>";
        $error=true;
        exit();

    }
 

    //check if nums r entered
    if(!is_numeric($num1 ) || !is_numeric($num2)){
        echo '<div class="result">Result: '. "u manipulated the html to enter a non number!"."</div>";
        $error=true;
        exit();

    }

   
    
   
      








    
    $ans=0;
    if (!$error){
        switch($operator){
            case "add":$ans=$num1+$num2; break;
            case "subtract":$ans=$num1-$num2; break;
            case "multiply":$ans=$num1*$num2; break;
            case "divide":$ans=$num1/$num2; break;
            default: echo '<div class="error">Result: '."u broke the calc!". "</div";
        }
    }

    echo '<div class="result">Result: ' . $ans . '</div>';


unset($num1);
unset($num2);
unset($ans);





}

else{
    echo "HACKER!";
}



?>





</body>


</html>

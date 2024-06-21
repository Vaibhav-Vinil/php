<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zohostyles.css">    
    <title>form</title>
</head>
<body>
    
<form method="post" action="includes\formhandler-inc.php"> 
<!--<form method="post" action="search.php">-->




<div>
<label for="fname" > First Name</label>  
<input type="text" name="fname" id="fname" placeholder="First Name" required >
</div>


<div>
<label for="lname"> Last Name</label>
<input type="text" name="lname" id="lname" placeholder="Last Name" required>
</div>


<div>
<label for="email"> Email </label>
<input type="email" name="email" id="email" placeholder="Email" required>
</div>

<div>
<label for="pwd"> Password</label>
<input type="password" name="pwd" id="password" placeholder="Password" required>
</div>
<input type="submit" class="submit" name="signup">
</div>

     </form>



    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <div class="admin">
        <form method="post">
            <input type="text" placeholder="Username" name ="username"> <br> 
            <input type="password" placeholder="Password" name ="password"><br>
            <input type="submit" values="submit" class="adsub" name ="submit">
        </form>

    </div>
    
</body>
</html>


<?php

include   "connect.php";

if(isset($_POST["submit"]))
{
    
    $usename = $_POST["username"];
    $password = $_POST["password"];
    $checkQuery = "select * from login where Username =  '$usename' and Password = '$password' ";
    
   $result = $dbconnection->query($checkQuery);
   $row = mysqli_num_rows($result);
   if($row < 1){
    echo "username or password incorrect ";


   }
   else{
    $_SESSION['username'] =$usename;
    header("location: profile.php");
   }
}




?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<div class = "log">
       <h1>Login Form</h1>
       <form method = "POST">

        <input type="text" placeholder ="Enter username" required name="  username" > <br><br>
        <input type="text" placeholder ="Enter password" required name="password" > <br><br>
        <input type="submit" value= "save" name="submit" class="btn"> 
        
        </form>
        </div>
    
</body>
</html> -->

<?php

include   "connection.php";

if(isset($_POST["loginbtn"]))
{
    
    $usename = $_POST["username"];
    $password = $_POST["password"];
    $checkQuery = "select * from pro where username =  '$usename' and password = '$password' ";
    
   $result =  $dbConnection ->query($checkQuery);
   $row = mysqli_num_rows($result);
   if($row < 1){
    echo "username or password incorrect ";


   }
   else{
echo "this is correct";

    $_SESSION['username'] =$usename;
     header("Location: dashboard.php");
   }
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

</head>
<body>
    <div class="header">
     <img src="./img./amazon.png">
     <div class="support">
     <iconify-icon icon="fluent:person-support-24-filled" class="supp"></iconify-icon >
    <h5>Support</h5> 
  
    
    </div>

    </div>



    <div class="midd">
     <h2><span>H</span>R  <span>S</span>ystem</h2>        

    <div class="age">
    <h1>Login Here</h1>
        <form method ="Post">
     
        <input type="text" placeholder="Enter your name " name ="username" >    <br> <br>                  
            <input type="password" placeholder="Enter your password " name ="password" > <br> <br>  
        <input type="submit" value ="Login" name ="loginbtn" class ="loginbtn"> <br> <br>  
        <hr style="width:344px;  margin-left:40px;  margin-top:10px;  ">
        <div class="kk">
        <h5>Forget Password</h5>
        <h6>Need Help</h6>
        </div>
          
    </div>
    </div>
    
</body>
</html>

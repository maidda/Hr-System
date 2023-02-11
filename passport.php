<?php

include "connection.php";
if(isset($_POST["submit"])){
    $fname=$_POST["Firstname"];
    $mname = $_POST["Middlename"];
    $lname = $_POST["Lastname"];
    $pno = $_POST["PNO"];
    $nationality = $_POST["Nationality"];
    $expirydate = $_POST["Expirydate"];
    $issuedate =$_POST["Issuedate"];
    $email =$_POST["Email"];


    $sqlcommands ="INSERT INTO home( Firstname, Middlename, Lastname,Pno, Nationality, Expirydate, Issuedate, Email)
    values ('$fname','$mname','$lname', '$pno','$nationality','$expirydate','$issuedate','$email')";

           $result = $dbConnection->query($sqlcommands);

    if($result){
        echo "Thank you we will respond for few time";
    }
    else{
        echo $dbconnection->connetion_error;
    }
}

?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport</title>
    <link rel ="stylesheet" href="passport.css">
    <link rel ="stylesheet" href="dashboard.php">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
   
 
</head>
<body>

   
    <div class="backgroundform">
        
    <h1>Passport</h1>
    <form method ="POST">
    <h3>Firstname</h3>
    <input type="text" placeholder ="Enter Firstname" required name = "Firstname"><br><br>
    <h3>Middlename</h3>
    <input type="text" placeholder ="Enter Middlename" required name = "Middlename"><br><br>
    <h3>Lastname</h3>
    <input type="text" placeholder ="Enter Lastname" required name = "Lastname"><br><br>
    <h3>Email</h3>
    <input type="text" placeholder ="Enter Email"  required name = "Email"><br><br>
        <h3>Passport No</h3>
    <input type="number" placeholder ="Enter PassportNo" required name = "PNO"><br><br>
    <h3>Nationality</h3>
    <input type="text" placeholder ="Enter Nationality"  required name = "Nationality"><br><br>
    <h3>Expiry Date</h3>
    <input type="date" value ="20-01-2023" required name="Expirydate"><br><br>
    <h3>Issue Date</h3>
    <input type="date" value ="20-01-2023" required name="Issuedate"><br><br>
 
    <input type="submit"  value = "Submit"class= "btn"  required name = "submit" ><br> <br> <br> <br> <br>
</form>

</div>


</body>
</html>
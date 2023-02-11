<?php

include "connection.php";

if (isset($_POST["update"])){

             $id = $_POST["id"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $attenden = $_POST["Attendence"];
            $daily = $_POST["Daily_Work"];
            $department = $_POST["Department"];  

   $command = "INSERT into daily(ID, Firstname, Lastname, Attendence, Daily_Work, Department)
   values('$id','$firstName','$lastName','$attenden','$daily','$department')";
           
            $result = $dbConnection->query($command);

            if($result){

                // header("location: home.php");

                echo "Data saved";
            }
            else {
                

            echo $dbConnection->connect_error;
        
        }
}
       ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dailywork</title>
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

  <div  class="pro">
 
      <div class="poo">
     <img src="./img./ceo of th amazon.jpg">
     <h1>Andrew R. Jassy</h1>
     <div class="viv">
     <iconify-icon icon="mingcute:facebook-line"></iconify-icon>
     <iconify-icon icon="mdi:twitter"></iconify-icon>
   </div>
     </div>

    <div class="nav-side">
       

       <ul>
       
       <li class="current" ><a href="dashboard.php"><iconify-icon icon="pixelarticons:dashbaord"></iconify-icon> Dashboard</a></li>
         <li><a href="all_employee.php"><iconify-icon icon="mdi:people-group"></iconify-icon> Employee </a></li>
        <li><a href="performance.php"><iconify-icon icon="ic:twotone-av-timer"></iconify-icon>  Performance </a></li>
        <li><a href="department.php"><iconify-icon icon="ri:bank-line"></iconify-icon>  Departments </a></li>
        <li><a href="report.php"><iconify-icon icon="mdi:file-report"></iconify-icon>  Report </a></li>
        <li><a href="logout.php"><iconify-icon icon="mdi:logout-variant"></iconify-icon>  Logout </a></li>
      
           </ul>
      
       </div>
   
    
       </div>

<!--  -->
  

    <div class="up3">
<br><br><br><br><br><br>
        <h4>Daily Work</h4>
       
        <form method="POST">

            <input type="text" placeholder="Enter ID"  name="id"><br><br>
            <input type="text" placeholder="Enter Your First Name"  name="firstName"><br><br>
            <input type="text" placeholder="Enter Your Last Name"  name="lastName"><br><br>
            <input type="text" placeholder="Enter Your Attendence"  name="Attendence" ><br><br>
            <input type="text" placeholder="Enter Your Daily Work"  name="Daily_Work"> <br><br>
            <input type="text" placeholder="Enter Your Department"  name="Department"> <br><br>           
            <input type="submit" value="Update" class="btn" name="update">
        
        </form>

        
</div>








    
</body>
</html>
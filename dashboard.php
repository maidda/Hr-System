<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
<!-- /// -->



<!-- <div class="main"> -->

       <div class="boxes">

       <div class="box1">
       <iconify-icon icon="material-symbols:person-3"></iconify-icon><h2>Total Of Employee</h2>

        <?php 
        
        include "connection.php";

        $query = "select count(*) as count from employee";

        $result = $dbConnection->query($query);


        if($result){

            while($row = $result->fetch_assoc()){
                echo "<h1>" . $row["count"] . "</h1>";
            }
        }
        
        ?>



            </div>


       <div class="box2">
       <iconify-icon icon="ri:money-dollar-circle-fill"></iconify-icon> <h2>Total Of Salary<h2>
      
        
         <?php 

            include "connection.php";

            $salaryQuery = "select sum(salary) as sum from employee";

            $result = $dbConnection->query($salaryQuery);
            $sumData = "";

            if($result){
                while($row = $result->fetch_assoc()){
                    $sumData .= "<h1>" . "$" . $row["sum"] . "</h1>"; 

                }
                echo $sumData;
           
            }
        ?>
            </div>
       <div class="box3">
       <iconify-icon icon="material-symbols:format-align-left"></iconify-icon>
            <h1>Total Of Leave</h1>
            <h1>23</h1>
            </div>




    </div>

</div> 



       


     

</body>
</html>
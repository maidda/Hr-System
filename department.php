<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>separtment</title>
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
     <iconify-icon icon="mingcute:facebook-line" ></iconify-icon>
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
        <li><a href="logout.phps"><iconify-icon icon="mdi:logout-variant"></iconify-icon>  Logout </a></li>
      
           </ul>
      
       </div>
   
    
       </div>

       <!-- // -->


       <div class="banna">
 
<!-- <div class="abovePart">
<button><a href="add_employee.php">Add Employee</a></button>
 
<button><a href="search.php" class="btnSearch">Search</a></button>

</div>  --> 

 <table>

 <th>ID</th>
 <th>FirstName</th>
  <th>LastName</th>
 <!-- <th>Age</th>  -->
 <!-- <th>Salary</th> -->
 <th>Department</th>
 <th>Address</th> 
 <th>Delete</th>
 <th>Update</th> 



 <?php 

     include "connection.php";
     //Data kasoo aqri database ka
     $sqlQuery = "select * from employee";
     
     $result = $dbConnection->query($sqlQuery);

     $table = "";

     if($result){

         while($row = $result->fetch_assoc()){

             
             
             $table .= "<tr>";

             $table .= "<td>" . $row["ID"] . "</td>";
             $table .= "<td>" . $row["FirstName"] . "</td>";
             $table .= "<td>" . $row["LastName"] . "</td>";
            //  $table .= "<td>" . $row["Age"] . "</td>";
            // $table .= "<td>" . "$". $row["Salary"] . "</td>";
            $table .= "<td>" . $row["Department"] . "</td>";
              $table .= "<td>" . $row["Address"] . "</td>";

             $deleteLink = "delete.php?" . "&id=" . $row["ID"];

             $updateLink = "update.php?" . "&id=" . $row["ID"]
             . "&firstName=" . $row["FirstName"] . "&lastName=" . $row["LastName"]
             . "&age=" . $row["Age"] . "&salary=" . $row["Salary"] . "&department=" . $row["Department"]
             . "&address=" . $row["Address"];  

             $table .= "<td>" . '<a href=" '.$deleteLink.' " class="deleteBtn">Delete</a> ' . "</td>";
             $table .= "<td>" . '<a href=" '.$updateLink.' " class="updateBtn">Update</a> ' . "</td>";

             
             $table .= "</tr>";
          
         }

         echo $table;
     }
     else {
         echo $dbConnection->connect_error;
     }
 
 ?>
 </table>

</div>

</body>
</html>
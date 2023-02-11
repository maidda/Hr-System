<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>

<div class="main">
<form method="post">

<input type="number" placeholder="Enter Employee ID" required name="search" class="searchInput">

<input type="submit" value="Search" name="btnSearch" class="btnSearch">
</form>

<table>


<?php 

    include "connection.php";
    //Data kasoo aqri database ka

    if(isset($_POST["btnSearch"])){

        $id = $_POST["search"];

        $sqlQuery = "select * from employee where ID = '$id' ";
        $result = $dbConnection->query($sqlQuery);
        $table = "";

        if($result){

            while($row = $result->fetch_assoc()){
    
                
                $table .= "<tr>";
    
                $table .= "<td>" . $row["ID"] . "</td>";
                $table .= "<td>" . $row["FirstName"] . "</td>";
                $table .= "<td>" . $row["LastName"] . "</td>";
                $table .= "<td>" . $row["Age"] . "</td>";
                $table .= "<td>" . "$". $row["Salary"] . "</td>";
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
    
    
    }
  
 ?>

</table>

</div>
 

</body>
</html>
<?php

    include "connection.php";

    if(isset($_GET["id"])){

        $id = $_GET["id"];
        
        $deleteQuery = "delete from  employee where ID = '$id' ";

        $result = $dbConnection->query($deleteQuery);

        if($result){

           
           header("location: all_employee.php");
        }

        else {
            echo $dbConnection->connect_error;
        }
   
    }

?>
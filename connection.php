<?php

    $dbConnection = new mysqli("localhost", "root", "", "login");
    
    if($dbConnection){
        //echo "Waa isku xiran pho iyo databse ka";
    }
    else {
        echo $dbConnection->connect_error;
    }

?>
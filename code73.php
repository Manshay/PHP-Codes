<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
        echo "Session removed.<br>";
    }
    else{
        echo "Session already destroyed.";
    }

    echo "<br><br>";
    echo "Code executed by Manshay(0221BCA106)";

?>
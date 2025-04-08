<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Manshay";
    $_SESSION["lastname"] = "Bhandari";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"] . "<br><br>";
    echo "Code executed by Manshay(0221BCA106)";
?>
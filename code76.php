<?php

    $filename = "newfile.txt";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    $txt = "Manshay Bhandari\n";
    fwrite($myfile, $txt);
    $txt = "PHP\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    if(file_exists($filename))
    {
       $filesize = filesize($filename);
       $msg = "File  created with name $filename ";
       $msg .= "containing $filesize bytes";
       echo $msg;
    }
    else
    {
       echo "File $filename does not exit";
    }
    echo "<br><br>";
    echo "Code executed by Manshay(0221BCA106)";
    
?>
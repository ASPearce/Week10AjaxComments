<?php
       $servername = "localhost"; //change where appropriate
       $username = "student";     //change where appropriate
       $password= "website";      //change where appropriate
       $dbasename = "ajaxcomments"; //change where appropriate
       // Create connection
       $mysqli = new mysqli($servername, $username, $password,       $dbasename);
       // Check connection
       if ($mysqli->connect_errno) {
           printf("Connect failed: %s\n", $mysqli->connect_error);
           exit();
       }
?>

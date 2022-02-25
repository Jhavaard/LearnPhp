<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "learnphp_db";

    if(!$Con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
        die("failed to connect!");
    }
?>
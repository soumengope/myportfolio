<?php

    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "dataCollection";
    $conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName) or die('db not connecte');
    //echo 'database connected';

?>
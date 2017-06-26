<?php
    $host_name  = "db683479623.db.1and1.com";
    $database   = "db683479623";
    $user_name  = "dbo683479623";
    $password   = "<Deve@1990>";


    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    
    if(mysqli_connect_errno())
    {
    echo '<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>';
    }
    else
    {
    echo '<p>Connection to MySQL server successfully established.</p>';
    }
?>
<?php
    $host = "localhost";
    $user = "root" ;
    $pass = "";
    $db = "demande";
    $con = mysqli_connect($host,$user,$pass,$db);
    if (!$con) {
        echo "you are not connected with database !!";
    }
?>
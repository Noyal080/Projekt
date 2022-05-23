<?php
    $host = "localhost";
    $username = "root";
    $pasw = "";
    $dbname = "register";

    $conn = mysqli_connect($host,$username,$pasw,$dbname);
    if(mysqli_connect_error())
{
    echo "Cannot connect";
}
?>
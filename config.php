<?php

$conn = mysqli_connect("localhost", "root", "", "newsproject") or
    die("Connection failed");


if($conn)
{
    echo ".";
}
else{

    echo "fail";
}
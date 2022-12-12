<?php include "config.php" ?>

<?php

   
    $userid = $_POST['userid'];
    $password = $_POST['password'];

$sql = "SELECT  FROM registration WHERE id = '{$userid}' AND password= '{$password}'";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("location:adminwelcome.php");

    }
    else{

    echo "falied";
    }









?>
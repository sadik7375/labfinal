<?php include "config.php" ?>

<?php 

if(isset($_POST['submit']))

{

    $id = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];


    $sql = "INSERT INTO registration (id,password,name,email,role) VALUES ('{$id}','{$password}','{$name}','{$email}','{$role}')";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header("location:login.php");
        echo "Registration done";
    }
    else{

        die("Something wrong");
    }


    }







?>


<?php 
include "config.php";
$old_password=$_POST['oldpassword'];
$new_password = $_POST['newpassword'];
$repassword = $_POST['repassword'];

$sql1 = "SELECT password FROM registration WHERE password = '{$old_password}'";

  $result = mysqli_query($conn, $sql1) or die("Query Failed.");

if (mysqli_num_rows($result) > 0) {

    if ($new_password == $repassword) {
        $sql = "UPDATE registration SET password = '{$new_password}'  WHERE id = '20433021'";

        if (mysqli_query($conn, $sql)) {
            header('location:adminwelcome.php');
        } else {

            echo "false";
        }
    } else {

        echo "something wrong";
    }
}
  ?>   



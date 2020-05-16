<?php
    require "databaseconn.php";
    /*if (!$conn){
        echo "Error";
    }*/

    $username = $_POST['uname'];
    $password = $_POST['pword'];
    //$qry = "SELECT username , pw FROM users where username = ".$username." and pw = ".$password.";";
   $res = mysqli_query($conn , "SELECT username , pw FROM users where username = '$username' and pw = '$password' ");
   if (mysqli_num_rows($res) > 0) {
       echo "Sucessfully logged in";
       header('location:logged.html');
   }
   else {
       echo "Not logged in";
   }
?>

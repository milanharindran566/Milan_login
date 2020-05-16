<?php
    require "databaseconn.php";

    //$fname = $_POST['fname']; 
    //$lname = $_POST['lname'];
    //$email = $_POST['email'];
    $uname = $_POST['uname'];
    $pword = $_POST['pd'];
    print $uname;
    print $pword;
    $res = mysqli_query($conn,"INSERT INTO users(username , pw) values('$uname' , '$pword')");
    header("login.html")

?>


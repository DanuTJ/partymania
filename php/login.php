<?php
require_once 'db.php';
session_start();
//Login
if ( isset( $_POST['submit'] ) ){

    $email = $_REQUEST['email'];
    $pw = $_REQUEST['pw'];
    echo $email;
    echo $pw;
    echo "hari";
    $result = mysqli_query($con, 'SELECT id FROM users WHERE email="'.$email.'" AND password="'.$pw.'"');
    //echo $result;
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"];
        $_SESSION['userid'] = $row["id"];
        echo $_SESSION['userid'];
        header('Location: ../dashboard.php');
    }
    else{
        echo "Wade awl";
        header('Location: ../login.html');
    }
}
//Logout
if ( isset( $_POST['logout'] ) ){
    echo "Logging Out";
    session_destroy();
    unset($_SESSION);
    header("Location: ../login.html",TRUE,302);
}
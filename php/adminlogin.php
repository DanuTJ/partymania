<?php
session_start();
//Login
if ( isset( $_POST['submit'] ) ){
    //Database Connection details  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "partymania";
    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
    $email = $_REQUEST['email'];
    $pw = $_REQUEST['pw'];
    echo $email;
    echo $pw;
    echo "hari";
    $result = mysqli_query($con, 'SELECT id FROM admin WHERE email="'.$email.'" AND password="'.$pw.'"');
    //echo $result;
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"];
        $_SESSION['admin'] = $row["id"];
        header('Location: ../admin.php');
    }
    else{
        echo "Wade awl";
        header('Location: ../adminlogin.html');
    }
}
//Logout
if ( isset( $_POST['logout'] ) ){
    echo "hiiih";
    session_destroy();
    header("Location: ../adminlogin.html");
}
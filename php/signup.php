<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pw = $_POST['pw'];

echo $name;
echo $email;
echo $phone;
echo $password;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "partymania";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql=  "INSERT INTO users (name, email, phone, password) 
            VALUES ('$name', '$email', '$phone', '$pw')";
    if ($conn->query($sql) === TRUE) {
        echo("Done");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "hitapan";
    $conn->close();

?>
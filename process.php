<?php
$servername = "sql201.infinityfree.com";
$username = "if0_38396745";
$password = "enock600";
$database = "if0_38396745_personal_information";

$conn = new mysqli ($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed!:".$conn->connect_error);
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO informaation (Email_address, Ussername, Password) 
        VALUES ('$email', '$username', '$password')";

if ($conn->query ($sql)===TRUE){
    echo "Detailes sent succsesfully ✅✅✅";
} else {echo "Some errors occupyed!" .$sql ."<br>" .$conn->error;}

$conn->close();

?>
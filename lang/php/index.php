<?php

$name = ($_POST['name']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);
$village = ($_POST['village']);
$message = ($_POST['message']);
$city = ($_POST['city']);
$gender = ($_POST['gender']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alsmou";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO valnntueer (Name, Phone, Email, Village, Message, City, Gender) VALUES ('$name', '$phone', '$email', '$village', '$message', '$city', '$gender')";

if($conn->query($sql) == True){
    echo "New Collumn Inerted Successfuly";
}

else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
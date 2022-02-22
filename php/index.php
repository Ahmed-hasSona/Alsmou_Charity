<?php

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$village = filter_var($_POST['village'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);

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



     $formError = array();

     if(strlen($name) <= 2){
         $formError[] = 'User Name Must be Larger Than 2 Charctar';
     }
    
     if(strlen($message) < 10){
        $formError[] = 'Message can’t be less than 10 charctar';
    }

    $header = 'From: ' . $email .'\r\n';
    $myemail = 'ahmedhassona719@gmail.com';
    $subject = 'Sign in';

    if(empty($formError)){
        mail($myemail ,$subject, $message , $header, $phone, $village, $city, $gender);

        $name = '';
        $email = '';
        $phone = '';
        $village = '';
        $message = '';
        $city = '';
        $gender = '';

        $success = '<div class="alert alert-success">We have Recive Your Message ^_^</div>';
    }

?>
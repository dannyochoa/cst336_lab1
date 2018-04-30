<?php

//INSERT INTO `lab8_user` (`userId`, `firstName`, `lastName`, `email`, `username`, `password`, `zipCode`) 
//VALUES (NULL, 'Gilbert', 'Ochoa', 'gochoa@csumb.edu', 'gochoa', 'dplusg', '93907');
include 'dbConnection.php';
$conn = connectToDB("lab8");

// $firstName = $_POST['firstName'];
// $lastName = $_POST['lastName'];
// $email = $_POST['email'];
// $username = $_POST['username'];
// $password = $_POST['password'];
// $zipCode = $_POST['zipCode'];
$firstName = "123";
$lastName = "123";
$email = "123";
$username = "123";
$password = "123";
$zipCode = "123";


$sql = "INSERT INTO `lab8_user` (`userId`, `firstName`, `lastName`, `email`, `username`, `password`, `zipCode`)
VALUES (NULL, :firstName, :lastName, :email, :username, :password, :zipCode);";
// $sql = "SELECT * FROM lab8_user WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->execute(array(":username"=>$username, 
                     ":firstName"=>$firstName,
                     ":lastName"=>$lastName,
                     ":email"=>$email,
                     ":password"=>$password,
                     ":zipCode"=>$zipCode));

// print_r($record);
echo json_encode($record);



?>
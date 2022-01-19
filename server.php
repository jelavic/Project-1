<?php
session_start();


//initialising variables

$server = "localhost";
$username = "root";
$password = "";
$dbase = "company";





//connect to db

$conn = new mysqli($server, $username, $password, $dbase);

if(!$conn){
    
    die(mysqli_error($conn));
}


//register

if(isset($_POST['register'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $password_2= $_POST['password_2'];


    $sql = "INSERT INTO login (loginUserName, loginPassword) VALUES ('$username', '$password')";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "Registration successfull";
        header('location: index.php');
    }else{
        die(mysqli_error($conn));
    }
}


//login
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $sql = "SELECT * FROM login WHERE loginUserName ='$username' AND loginPassword='password'";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "Login successfull";
        header('location: index.php');
    }else{
        die(mysqli_error($conn));
    }
}




?>

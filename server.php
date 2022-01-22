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
    

   if($password === $password_2) {
        $result = true;

        $sql = "INSERT INTO `login` (loginUserName, loginPassword) VALUES ('$username', '$password')";

        $result = mysqli_query($conn, $sql);

        if($result){
            //echo "Registration successfull";
            header('location: users.php');
    }
}
    else{
        echo "<script>alert('passwords do not match!')</script>";
        //  header('location: register.php');
        
        
        die(mysqli_error($conn));
    }
    
}



//login
if(isset($_POST['login'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE loginUserName='$username' AND loginPassword='$password'";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "Login successfull";
        header('location: users.php');
    }else{
        echo "<script>alert('user doesn't exist!')</script>";
        //header('location: login.php');

        die(mysqli_error($conn));
    }
}


//new user

if(isset($_POST['newUser'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $password_2= $_POST['password_2'];
    

   if($password === $password_2) {
        $result = true;

        $sql = "INSERT INTO `login` (loginUserName, loginPassword) VALUES ('$username', '$password')";

        $result = mysqli_query($conn, $sql);

        if($result){
            //echo "Registration successfull";
            header('location: users.php');
    }
}
}

//new department

if(isset($_POST['submit'])){
    $department = $_POST['department'];
    $location = $_POST['location'];

    $sql = "INSERT INTO `department` (departmentName, departmentLocation) VALUES ('$department', '$location')";

    $result = mysqli_query($conn, $sql);

    if($result === TRUE){
        echo "<script>alert('Success!')</script>";
        header('location: department.php');
    }
    else{
        echo "<script>alert('Fail')</script>";
        //  header('location: login.php');
    }
}
    


//new employee

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO `employee` (employeeName, salary) VALUES ('$name', '$salary')";

    $result = mysqli_query($conn, $sql);

    if($result === TRUE){
        echo "<script>alert('Success!')</script>";
        header('location: employee.php');
    }
    else{
        echo "<script>alert('Fail employee')</script>";
        //  header('location: login.php');
    }
}


?>

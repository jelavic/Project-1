<?php

 include('header.php'); 

//delete user

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `login` WHERE loginNo=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Deleted successfully')</script>";
        header('location: users.php');
    }else{
        die(mysqli_error($conn));
    }

}   



//delete department

if(isset($_GET['deletedep'])){
    $id = $_GET['deletedep'];

    $sql = "DELETE FROM `department` WHERE departmentNo=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Deleted successfully')</script>";
        header('location: department.php');
    }else{
        die(mysqli_error($conn));
    }
}



//delete employee

if(isset($_GET['deletedeemp'])){
    $id = $_GET['deletedeemp'];

    $sql = "DELETE FROM `employee` WHERE employeeNo=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Deleted successfully')</script>";
        header('location: employee.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>

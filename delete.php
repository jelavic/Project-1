<?php

    include('server.php');

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM login WHERE loginNo=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "Deleted successfully";
            header('location: index.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>

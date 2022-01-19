<?php include('server.php') ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css">


    <title>Company</title>
</head>
<body>
    <h1>Company</h1>

    <div>
    <table class="styled-table">
    <thead>
        <tr>
            <th>loginNo</th>
            <th>loginUserName</th>
            <th>loginPassword</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql = "SELECT * FROM login ";
    $result = mysqli_query($conn, $sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)){

            $id = $row['loginNo'];
            $name = $row['loginUserName'];
            $password = $row['loginPassword'];

            echo ' <tr>
            <th scope=row>'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$password.'</td>
            <td>
            <button type=""><a href="update.php?updateid='.$id.'">Update</a></button>
            <button type=""><a href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
            
        </tr>';
        }
    }
    ?>
  
    </tbody> 
</table>
    </div>


</body>
</html>
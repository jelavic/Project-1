<?php include('header.php'); 

?>

<section class="table-container">
    <h1>Users</h1>

    <div>
    <table class="styled-table">
    <thead>
        <tr>
            <th>loginNo</th>
            <th>loginUserName</th>
            <th>loginPassword</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql = "SELECT * FROM `login`";
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
            <a class="btn btn--primary" href="edit-user.php?updateid='.$id.'">Edit</a>
            <button class="btn btn--secondary" type="submit" name="delete"><a href="delete.php?deleteid='.$id.'">DELETE</a></button>
            </td>
            
        </tr>';
        }
    }

    ?>
 
    
    </tbody> 
</table>
    </div>
    
    <button class="btn btn--primary" type="submit" name=newUser ><a href="addNewUser.php">Add new User</a></button>
    </section>
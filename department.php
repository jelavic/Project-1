<?php include('header.php'); ?>


<section class="table-container">
    <h1>Departments</h1>

    <div>
    <table class="styled-table">
    <thead>
        <tr>
            <th>departmentNo</th>
            <th>departmentName</th>
            <th>departmentLocation</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql = "SELECT * FROM `department`";
    $result = mysqli_query($conn, $sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)){

            $id = $row['departmentNo'];
            $name = $row['departmentName'];
            $location = $row['departmentLocation'];

            echo ' <tr>
            <th scope=row>'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$location.'</td>
            <td>
            <button class="btn btn--primary" type="submit" name="update"><a href="update.php?updatedep='.$id.'">UPDATE</a></button>
            <button class="btn btn--secondary" type="submit" name="delete"><a href="delete.php?deletedep='.$id.'">DELETE</a></button>
            </td>
            
        </tr>';
        }
    }
    ?>
  
    </tbody> 
</table>
    </div>

    <button class="btn btn--primary" type="submit" name=newDepartment><a href="addDepartment.php">Add new</a></button>
    </section>
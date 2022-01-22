<?php include('header.php'); ?>



<section class="table-container">
    <h1>Employee</h1>

    <div>
    <table class="styled-table">
    <thead>
        <tr>
            <th>employeeNo</th>
            <th>employeeName</th>
            <th>salary</th>
            <th>departmentNo</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql = "SELECT * FROM `employee`";
    $result = mysqli_query($conn, $sql);
    if($result){
        while ($row = mysqli_fetch_assoc($result)){

            $id = $row['employeeNo'];
            $name = $row['employeeName'];
            $salary = $row['salary'];
            $departmentNo = $row['departmentNo'];
            $date = $row['lastModifyDate'];

            echo ' <tr>
            <th scope=row>'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$salary.'</td>
            <td>'.$departmentNo.'</td>
            <td>'.$date.'</td>
            <td>'.$departmentNo.'</td>
            <td>'.$date.'</td>
            <td>
            <button class="btn btn--primary" type="submit" name="update"><a href="update.php?updateemp='.$id.'">UPDATE</a></button>
            <button class="btn btn--secondary" type="submit" name="delete"><a href="delete.php?deleteemp='.$id.'">DELETE</a></button>
            </td>
            
        </tr>';
        }
    }
    ?>
  
    </tbody> 
</table>
    </div>

    <button class="btn btn--primary" type="submit" name=newEmployee><a href="addEmployee.php">Add new</a></button>
    </section>
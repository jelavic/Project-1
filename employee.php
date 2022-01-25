<?php include('header.php'); ?>


<section class="table-container">
    <h1>Employees</h1>

    <div>
    <table class="styled-table">
    <thead>
        <tr>
            <th>employeNo</th>
            <th>employeeName</th>
            <th>salary</th>
            <th>departmentNo</th>
            <th>lastModifyDate</th>
            <th>Action</th>
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
            $lastModifyDate = $row['lastModifyDate'];


            echo ' <tr>
            <th scope=row>'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$salary.'</td>
            <td>'.$departmentNo.'</td>
            <td>'.$lastModifyDate.'</td>
            <td>
            <button class="btn btn--primary" type="submit" name="update"><a href="edit-employee.php?updateid='.$id.'">Edit</a></button>
            <button class="btn btn--secondary" type="submit" name="delete"><a href="delete.php?deletedeemp='.$id.'">DELETE</a></button>
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
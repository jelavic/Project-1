<?php include('server.php');

$id = 0;

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
 
    $sql = "SELECT * FROM `employee` WHERE employeeNo = $id";
                
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $conn->close();
}


//update

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $employeeName = $_POST['name'];
    $salary = $_POST['salary'];
   

    $sql = "UPDATE `employee` SET employeeName='$employeeName', salary='$salary' WHERE employeeNo='$id'";
   
    if ($conn->query($sql) === TRUE) {
        header('location: employee.php');
        echo "New record created successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">

    <title>Edit employee</title>
</head>


<body>

<section>
    <div class="section-container">
            <h1 class="section-title">Update employee</h1>
            
            <div class="form-container">
                    <form action="edit-employee.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                    <div class="form-field">
                        <label for="name" class="label-name"><span class="content-name">Full name:</span></label>
                        <input type="text" name="name" value="<?php echo $user['employeeName']; ?>" >                          
                    </div>

                    <div class="form-field">
                    <label for="salary">Chose salary</label>
                    <select id="salary" name="salary">
                        <option value="<?php echo $user['salary']; ?>" selected></option>
                        <option>25000</option>
                        <option>30000</option>
                        <option>35000</option>
                        <option>50000</option>
                    </select>
                    </div>
    
            
                    <div class="button-container">
                        <button class="btn btn--primary" type="submit" name=save>Save</button>
                        <button class="btn btn--primary" type="reset" name=reset >Reset</button>
                    </div>
                    </form>
                    
                </div> 
                
            </div>
            </div>
        </section>
</body>
</html>
<?php include('header.php'); 

$id = 0;

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
 
    $sql = "SELECT * FROM `department` WHERE departmentNo = $id";
                
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $conn->close();
}


//update

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $departmentName= $_POST['department'];
    $location= $_POST['location'];
   

    $sql = "UPDATE `department` SET departmentName='$departmentName', departmentLocation='$location' WHERE departmentNo='$id'";
   
    if ($conn->query($sql) === TRUE) {
        header('location: department.php');
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

    <title>Update</title>
</head>


<body>

<section>
    <div class="section-container">
            <h1 class="section-title">Update department</h1>
            
            <div class="form-container">
                    <form action="edit-department.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="form-field">
                        <label for="department">Chose department</label>
						<select id="department" name="department">
                            <option value="<?php echo $user['departmentName']; ?>" selected></option>
							<option>Development</option>
							<option>Sales</option>
						</select>
                        </div>

                        <div class="form-field">
                        <label for="location">Chose location</label>
						<select id="location" name="location" value="<?php echo $user['departmentLocation']; ?>">
                            <option value="<?php echo $user['departmentLocation']; ?>" selected></option>
							<option>London</option>
							<option>Zurich</option>
							<option>Osijek</option>
							<option>Basel</option>
							<option>Lugano</option>
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
        </section> <!--  END Section -->
</body>
</html>
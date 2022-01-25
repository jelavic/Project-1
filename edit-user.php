<?php include('header.php'); 

$id = 0;

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
 

    $sql = "SELECT * FROM `login` WHERE loginNo = $id";
                
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $conn->close();

}


//update



if(isset($_POST['save'])){
    $id = $_POST['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
   

    $sql = "UPDATE `login` SET loginUserName='$username', loginPassword='$password' WHERE loginNo='$id'";
   
    if ($conn->query($sql) === TRUE) {
        header('location: users.php');
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
            <h1 class="section-title">Update</h1>
            
            <div class="form-container">
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="form-field">
                            <label for="username" class="label-name"><span class="content-name">Username:</span></label>
                            <input type="text" name="username" value="<?php echo $user['loginUserName']; ?>" required>                          
                        </div>
        
                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Password:</span></label>
                            <input type="password" name="password" value="<?php echo $user['loginPassword']; ?>" required>
                        </div>
        
                
                        <div class="button-container">
                            <button class="btn btn--primary" type="submit" name=save>Save</button>
                            <button class="btn btn--primary" type="reset" name=reset >Reset</button>
                        </div>
                    </form>
                    
                </div> 
                
            </div>
            </div>
        </section> <!--  END register Section -->
</body>
</html>
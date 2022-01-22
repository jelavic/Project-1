<?php include('header.php'); 
        

//update


if(isset($_SET['update'])){

    $username= $_POST['username'];
    $password= $_POST['password'];
    $id = $_GET['updateid'];

    $sql = "UPDATE `login` SET `loginUserName`='$username',`loginPassword`='$password' WHERE `loginNo`='$id'";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "Upadate successfull";
        header('location: users.php');
    }   
    else{
        header('location: register.php');
        //echo "<script>alert('FAIL')</script>";
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


                        <div class="form-field">
                            <label for="username" class="label-name"><span class="content-name">Username:</span></label>
                            <input type="text" name="username" required>                          
                        </div>
        
                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Password:</span></label>
                            <input type="password" name="password" required>
                        </div>
        
                
                        <div class="button-container">
                            <button class="btn btn--primary" type="submit" name=update >Update</button>
                            <button class="btn btn--primary" type="reset" name=reset >Reset</button>
                        </div>
                    </form>
                    
                </div> 
                
            </div>
            </div>
        </section> <!--  END register Section -->
</body>
</html>
<?php include('server.php');

 $id=$_GET['updateid'];

$sql = "SELECT * FROM login WHERE loginNo=$id";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$password = $row['password'];

//Update

if(isset($_POST['submit'])){
    $username= $_POST['loginUserName'];
    $password= $_POST['password'];
    $password_2= $_POST['loginPassword'];


    $sql = "UPDATE login SET loginNo=$id, loginUserName='$username', loginPassword='$password' WHERE loginNo=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "Updated successfully";
        header('location: index.php');
    }else{;
        die(mysqli_error($conn));

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
                    <form action="registration.php" method="post">


                        <div class="form-field">
                            <label for="username" class="label-name"><span class="content-name">Username:</span></label>
                            <input type="text" name="username" required value=<?php echo $username;?>>                          
                        </div>
        
                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Password:</span></label>
                            <input type="password" name="password" required value=<?php echo $password;?>>
                        </div>

                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Confirm password:</span></label>
                            <input type="password" name="password_2" required value=<?php echo $password;?>>
                        </div>
        
                
                        <div class="button-container">
                        <button type="submit"><a href="update.php?updateid='.$id.'">Update</a></button>
                            <button class="btn btn--primary" type="submit" name=update>Update</button>
                        </div>
                    </form>
                </div> 
                
            </div>
            </div>
        </section> <!--  END login Section -->
</body>
</html>
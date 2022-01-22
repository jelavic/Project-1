<?php include('server.php') 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">

    <title>Register</title>
</head>


<body>

<section>
    <div class="section-container">
            <h1 class="section-title">Register</h1>
            
            <div class="form-container">
                    <form action="register.php" method="post">


                        <div class="form-field">
                            <label for="username" class="label-name"><span class="content-name">Username:</span></label>
                            <input type="text" name="username" required>                          
                        </div>
        
                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Password:</span></label>
                            <input type="password" name="password" required>
                        </div>

                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Confirm password:</span></label>
                            <input type="password" name="password_2" required>
                        </div>
        
                
                        <div class="button-container">
                            <button class="btn btn--primary" type="submit" name=register >Submit</button>
                            <button class="btn btn--primary" type="reset" name=reset >Reset</button>
                            <p>Already a user? <strong><a href="login.php">Log in</a></strong></p>
                        </div>
                    </form>
                    
                </div> 
                
            </div>
            </div>
        </section> <!--  END register Section -->
</body>
</html>
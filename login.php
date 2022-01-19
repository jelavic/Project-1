<?php include('server.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">

    <title>Login</title>
</head>


<body>

<section>

    <div class="section-container">
            <h1 class="section-title">Login</h1>
            
            <div class="form-container">
                    <form action="login.php" method="post">
                        <div class="form-field">
                            <label for="username" class="label-name"><span class="content-name">Username:</span></label>
                            <input type="text" name="username" required>                          
                        </div>
        
                        <div class="form-field">
                            <label for="password" class="label-name"><span class="content-name">Password:</span></label>
                            <input type="password" name="password" id="password" required>
                        </div>
        
                
                        <div class="buttonContainer">
                        <button class="btn btn--primary" type="submit"  name=submit>Log in</button>
                        <p>Not a user? <strong><a href="registration.php">Register</a></strong></p>
                        </div>
                    </form>
                </div> 
                
            </div>
            </div>
        </section> <!--  END login Section -->
</body>
</html>
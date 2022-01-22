<?php include('server.php') 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">

    <title>New employee</title>
</head>


<body>

<section>
    <div class="section-container">
            <h1 class="section-title">Add new employee</h1>
            
            <div class="form-container">
                    <form action="addEmployee.php" method="post">
                        
                    <div class="form-field">
                        <label for="name" class="label-name"><span class="content-name">Full name:</span></label>
                        <input type="text" name="name" required>                          
                    </div>

                    <div class="form-field">
                    <label for="salary">Chose salary</label>
                    <select id="salary" name="salary">
                        <option>25 000</option>
                        <option>30 000</option>
                        <option>35 000</option>
                        <option>50 000</option>
                    </select>
                    </div>
    
            
                    <div class="button-container">
                        <button class="btn btn--primary" type="submit" name=add>Add New</button>
                        <button class="btn btn--primary" type="reset" name=reset >Reset</button>
                    </div>
                    </form>
                    
                </div> 
                
            </div>
            </div>
        </section>
</body>
</html>
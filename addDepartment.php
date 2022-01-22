<?php include('server.php') 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">

    <title>New department</title>
</head>


<body>

<section>
    <div class="section-container">
            <h1 class="section-title">Add new department</h1>
            
            <div class="form-container">
                    <form action="addDepartment.php" method="post">
                        
                        <div class="form-field">
                        <label for="department">Chose department</label>
						<select id="department" name="department">
							<option>Development</option>
							<option>Sales</option>
						</select>
                        </div>

                        <div class="form-field">
                        <label for="location">Chose location</label>
						<select id="location" name="location">
							<option>London</option>
							<option>Zurich</option>
							<option>Osijek</option>
							<option>Basel</option>
							<option>Lugano</option>
						</select>
                        </div>
        
                
                        <div class="button-container">
                            <button class="btn btn--primary" type="submit" name=submit>Add</button>
                            <button class="btn btn--primary" type="reset" name=reset >Reset</button>
                        </div>
                    </form>
                    
                </div> 
                
            </div>
            </div>
        </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Welcome</title>
    <link rel="stylesheet" href="./index.css">
    <script src="./index.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <h2>Admin Login</h2>
        </div>
        <form id="form" class="form" action="" method="post">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="UserName" id="username" name="username"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
             
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Password" id="password" name="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-group">
               
                <div>
               
               
                </div>
              </div>
            <button>Submit</button>
            <?php
           $username =  $_REQUEST['username'];
           $password =  $_REQUEST['password'];
           if($username == "admin" && $password == "admin123"){
               echo "<a href = 'admindashboard.php'>Login Sucess Click here to Continue</a>";
           }
           else{
               echo "<p>Invalid  Username or Password</p>";
           }
            ?>

        </form>
    </div>
 
</body>
</html>
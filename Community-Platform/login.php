<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-info">

    <?php 
         include 'first-navbar.php';
    ?>  

    <!-- <div>
        <form action="log-process.php" method="POST">

            <input type="text" name="uname" placeholder="Enter your Username" required> <br><br>
            
            <input type="password" name="password" placeholder="Enter your Password" required> <br><br>
            
            <button type="submit" value="Login" name="Login" >Login </button> <br><br>
            
        </form>
    </div> -->


    <div id="login">
        <h3 class="text-center text-white pt-5">LOGIN FORM</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="log-process.php" method="post">
                            <h5 class="text-center text-white">The Community Platform - A Platform For Everyone</h5>

                            <div class="form-group">
                                <label for="UserName" class="text-info">UserName:</label><br>
                                <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Your UserName">
                            </div>

                            
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                            </div>
                          

                            <div class="form-group">
                                <button class="btn btn-dark" type="submit" value="Login" name="Login" >LOGIN </button>
                            </div>                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
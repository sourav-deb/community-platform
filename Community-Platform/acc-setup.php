<?php

include 'conn.php';
if(!$con){
    die(' Please Check Your Connection'.mysqli_error($con));
}
session_start();
    if(isset($_SESSION['User'])){
      $uname=$_SESSION['User']; 
      $query="SELECT * from user where uname='$uname' ";
      $sql = mysqli_query($con,$query); 
      if(mysqli_num_rows($sql)>0){
        while($row=mysqli_fetch_assoc($sql)){
          $userName=$row['uname'];
        //   $userFirstName=$row['FirstName'];
        }
      }
    }
    else {
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Account Setup</title>

    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-info">
    
<?php
include 'navbar.php';

$a=$_SESSION['User'];
// echo $a;
// echo $userName;

$query= "SELECT * FROM user where uname= '$a' ";

$result = mysqli_query($con,$query);

// $nums = mysqli_num_rows($result);

// $res = mysqli_fetch_assoc($result);

while ($res = mysqli_fetch_assoc($result))
{
 ?>

    <div id="login">
        <h3 class="text-center text-white pt-5">COMPLETE ACCOUNT SETUP</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="setacc-process.php" method="get">
                            <h5 class="text-center text-white">Your Profile</h5>

                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $res['email']; ?>" readonly required >
                            </div>

                            <div class="form-group">
                                <label for="Name" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control"  placeholder="Enter Your Name" value="<?php echo $res['name']; ?>" readonly required>
                            </div>

                            <div class="form-group">
                                <label for="UserName" class="text-info">UserName:</label><br>
                                <input type="text" name="uname" id="uname" class="form-control"  placeholder="Enter Your UserName" value="<?php echo $res['uname']; ?>" readonly required>
                            </div>

                            <div class="form-group">
                                <label for="Community" class="text-info">Community:</label><br>
                                <input type="text" name="community" id="community" class="form-control"  placeholder="Enter Your Community" value="<?php echo $res['community']; ?>" readonly required>
                            </div>

                            <?php
                              
                              }

                              ?>
                             
                            
                            <div class="form-group">
                                <label for="dob" class="text-info">Date Of Birth:</label><br>
                                <input type="date" name="dob" id="dob" class="form-control" placeholder="Your D.O.B." required>
                            </div>

                            <div class="form-group">
                                <label for="city" class="text-info">Address:</label><br>
                                <input type="text" name="city" id="city" class="form-control" placeholder="Your City Name" required><br>
                                <input type="text" name="district" id="district" class="form-control" placeholder="Your District Name" required><br>
                                <input type="text" name="state" id="State" class="form-control" placeholder="Your State Name" required>
                            </div>

                            

                            <div class="form-group">
                                <button class="btn btn-dark" type="submit" value="Save" name="Save" >SAVE</button>
                            </div>                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        document.getElementById("email").disabled = true;
        document.getElementById("name").disabled = true;
        document.getElementById("community").disabled = true;
        document.getElementById("uname").disabled = true;
    </script> -->

    


</body>
</html>
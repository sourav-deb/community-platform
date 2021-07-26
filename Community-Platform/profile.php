<?php 
include 'conn.php';

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
    <title>Feed</title>

    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-info">

<?php 
include 'navbar.php';
?>

<div class=" ">
    
<div class="pt-3 pl-5 pr-5">
<?php 

$a=$_SESSION['User'];
    
    $query= "SELECT * FROM user where uname= '$a' ";

    $result = mysqli_query($con,$query);
    
    $nums = mysqli_num_rows($result);
    
    $res = mysqli_fetch_assoc($result);
    
    while ($res)
    {
?>
    
<div class="card-deck pl-5 pr-5">
        <div class="card">
            <img class="card-img-top" src="profile.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title list-group-item"><?php echo $res['uname']; ?></h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $res['name']; ?></li>
                    <li class="list-group-item"><?php echo $res['email']; ?></li>
                    <li class="list-group-item"><?php echo $res['dob']; ?></li>
                    <li class="list-group-item"><?php echo $res['community']; ?></li>
                    <li class="list-group-item"><?php echo $res['city']; ?>, <?php echo $res['district']; ?>,<?php echo $res['state']; ?> </li>
                </ul>
            </div>
        </div>
  
        <?php
break;
    }
    ?>
        <div class="card">
            <img class="card-img-top" src="download.png">
            <div class="card-block">
                <h4 class="card-title list-group-item">REWARDS</h4>
                <p class="card-text list-group-item">
                    <?php

                        $query= "SELECT * FROM user where referral= '$a' ";

                        $result = mysqli_query($con,$query);

                        $nums = mysqli_num_rows($result);

                        $reward = $nums * 10;

                        echo $reward ," points";
                    ?>
                </p>
  
                
            </div>
        </div>
  
        <div class="card">
            <img class="card-img-top" src="refer.jpg">
            <div class="card-block">
                <h4 class="card-title list-group-item">REFER AND EARN POINTS</h4>
                <p class="card-text list-group-item">
                Share and Earn Rewards 10points after someone from your community joins.<br>
                Share the Url. <br> localhost/community-platform/registration.php?referral=<?php echo $res['uname']?>&community=<?php echo $res['community']?> &nbsp; 

                </p>
                  
                
            </div>
        </div>
    </div>
    </div>
</div>




</body>
</html>


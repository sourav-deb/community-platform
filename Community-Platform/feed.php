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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
include 'navbar.php';
?>

<div class="jumbotron">
    <div class="row">
        <div class="col-sm">


<?php

$a=$_SESSION['User'];

$query= "SELECT * FROM user where referral = '$a' "; 
$result = mysqli_query($con,$query);

// $nums = mysqli_num_rows($result);

// $res = mysqli_fetch_assoc($result);

while ($rese = mysqli_fetch_assoc($result))
{
 ?>



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Joined by Referral</h3>
    <h5 class="card-title"><?php echo $rese['name']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $rese['uname']; ?></h6>
    <p class="card-text"><?php echo $rese['community']; ?> <br> <?php echo $rese['dob']; ?> </p>
    
  </div>
</div> <br>

<?php

}
?>

</div>

<div class="col-sm"> 
    <div class="scroll">

        
    <?php 

$a=$_SESSION['User'];

$query= "SELECT * FROM user where uname = '$a' "; 
$result = mysqli_query($con,$query);

while ($rese = mysqli_fetch_assoc($result))
{
    // echo $rese['community'];
    $comm = $rese['community'];

}   
        // $comm = $rese['community'];

            $query= "SELECT * FROM $comm";

            $result = mysqli_query($con,$query);

            // $nums = mysqli_num_rows($result);

            // $res = mysqli_fetch_assoc($result);

            while ($res = mysqli_fetch_assoc($result))
            {
                ?>
                <p><?php echo $res['message']; ?> </p>

                <?php
            }
            ?>





       

    </div>


<form action="send-message.php" method="post">
    <input type="text" name="message" placeholder="Type Your Message Here...">
    <button name="send" value="send">SEND</button>
</form>



</div>
</div>

</body>
</html>
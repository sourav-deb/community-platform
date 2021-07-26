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

    $a = $_SESSION['User'];

    $selectquery = " SELECT community from user where uname = '$a' ";
    $result = mysqli_query($con,$selectquery);
    while ($res = mysqli_fetch_assoc($result))
    {
        $b = $res['community']; 
    }

    if(isset($_POST['send'])){
        $message = $_POST['message'];
        
    
        if(empty($message))
        {
            echo '<script>alert("Please fill up the empty fields..");</script>' ;
            
        }
        else{

            $insertquery = "INSERT into $b  (message,uname) values('$message','$a')";
            if(mysqli_query($con,$insertquery))
            {
                ?>

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    <script>
                    console.log('Message sent');
                    </script>
                </body>
                </html>

                <?php
                    header("location:feed.php");
            }
        }
    }


?>
<?php 
    include 'conn.php';

    if(isset($_POST['Register'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $community = $_POST['community'];
        $password = $_POST['password'];
        $referral = $_POST['referral'];
    
        if(empty($name || $uname || $email || $password))
        {
            echo '<script>alert("Please fill up the empty fields..");</script>' ;
            header("location:registration.php");
        }
        else{

            $insertquery = "INSERT into user(email,name,uname,community,password,referral) values('$email','$name','$uname','$community','$password','$referral')";
            if(mysqli_query($con,$insertquery))
            {
                header("location:login.php");
            }
        }
    }


?>
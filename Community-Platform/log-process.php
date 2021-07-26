<?php 
include 'conn.php';
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['uname']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT * from user where uname='".$_POST['uname']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['uname'];
                // $fetchname="select * from employee where Name='".$_SESSION['SName']."'";
                header("location:check.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password");
               
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>
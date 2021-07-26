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
      
        }
      }
    }
    else {
        header("location:login.php");
    }

    $a = $_SESSION['User'];

    $selectquery = "SELECT * FROM user where uname = '$a' ";

    $result = mysqli_query($con,$selectquery);

    

    if($result){
      while($res = mysqli_fetch_assoc($result)){
        
        if($res['success']=='1'){
          
          header("location:feed.php");
          
        }
        else if($res['success']=='0'){
          header("location:acc-setup.php");
        }
        else
            echo ('Failed 321');
            // header("location:acc-setup.php");
      } 
    }
    else
        echo ('Failed');

    

?>
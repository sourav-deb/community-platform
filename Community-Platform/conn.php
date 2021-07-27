<?php
//      localhost
     $con=mysqli_connect('localhost','root','','community_platform');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
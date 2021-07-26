

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Registration</title>
</head>
<body class="bg-info">

<?php 
    include 'first-navbar.php';
?>

    <!-- <div class="jumbotron ">
        <div class="text-center">

       <h2 class="text-center"> REGISTRATION FORM </h2>

        <form class="form-control-sm" action="reg-process.php" method="POST">

            <input type="email" name="email" id="email" placeholder="Enter your Email" required> <br><br>

            <input type="text" name="name" placeholder="Enter your Name" required> <br><br>
            
            <input type="text" name="uname" placeholder="Enter your Username" required> <br><br>

            <select name="community" id="community">
                
                <option value="" disabled selected>Your Community</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Sikh">Sikh</option>
                <option value="Jain">Jain</option>
                <option value="Christian">Christian</option>
            </select> <br> <br>
            
            <input type="password" name="password" placeholder="Enter your Password" required> <br><br>
            
            <input type="text" name="referral" id="referral" placeholder="Your Referral Code" > <br><br>

            <button class="btn btn-primary" type="submit" value="Register" name="Register" >Register </button> <br><br>
            


        </form>
        </div>
    </div> -->

    <div id="login">
        <h3 class="text-center text-white pt-5">REGISTRATION FORM</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="reg-process.php" method="post">
                            <h5 class="text-center text-white">Fill Up The Form Register In The Community Platform</h5>

                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                            </div>

                            <div class="form-group">
                                <label for="Name" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control"placeholder="Enter Your Name">
                            </div>

                            <div class="form-group">
                                <label for="UserName" class="text-info">UserName:</label><br>
                                <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Your UserName">
                            </div>

                            <div class="form-group">
                                <label for="Community" class="text-info">Community:</label><br>
                                <select name="community" id="community" class="text-info form-control">
                
                                    <option value="" disabled selected>Select Your Community</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Sikh">Sikh</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Christian">Christian</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                            </div>

                            <div class="form-group">
                                <label for="referral" class="text-info">Referral:</label><br>
                                <input type="text" name="referral" id="referral" class="form-control" placeholder="Your Referral Code">
                            </div>                            

                            <div class="form-group">
                                <button class="btn btn-dark" type="submit" value="Register" name="Register" >REGISTER </button>
                            </div>                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="check_community"></div>



    <script>
        
        let url = window.location.href;
        if(url.includes('?')){
            console.log('Has Parameter');
            <?php 

                $referral = $_GET['referral'];
                $community = $_GET['community'];
            ?>

            var a= "<?php echo $community ?>";
            document.getElementById("community").value = "<?php echo $community ?>";

            document.getElementById("community").disabled = true;
            
            document.getElementById("referral").value = "<?php echo $referral ?>";

            document.getElementById("referral").disabled = true;
                    
        } else {
            console.log('No Parameter');
                        
        }


    </script>


<script>
    let url2 = window.location.href;
    if(url2.includes('?')){
        console.log('Has Parameter');
    }else{
        document.getElementById("referral").disabled = true;
    }

</script>


<script>

    document.getElementById("check_community").innerHTML ="If you're not of the community " + a + ", then " + '<a href=registration.php>' + "click here." +'</a>' ;
</script>





    
</body>
</html>
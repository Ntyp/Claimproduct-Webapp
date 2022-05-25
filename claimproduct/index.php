<?php 
    session_start();
    if(!$_SESSION['userid']) {
        header("Location: login.php");
    }
    else {
        


?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script>
    function openSlideMenu(){
        document.getElementById('menu').style.width = '250px';
        document.getElementById('content').style.marginLeft = '250px';
    }
    function closeSlideMenu(){
        document.getElementById('menu').style.width = '0';
        document.getElementById('content').style.marginLeft = '0';
    }
    </script>
</head>
<body>

        <!-- START NAVBAR -->
        
        <div id="content">

        <span class="slide">
        <a href="#" onclick="openSlideMenu()">
            <i class="fas fa-bars"></i>
        </a>
        </span>

        <div id="menu" class="nav">
        <a href="#" class="close" onclick="closeSlideMenu()">
            <i class="fas fa-times"></i>
        </a>
        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
        <a href="claim.php"><i class="fa fa-wrench" aria-hidden="true"></i>  Claim</a>
        <a href="check.php"><i class="fa fa-search" aria-hidden="true"></i>  Check</a>
        <a href="logout.php">Logout</a>
        </div>





            
                <div class="button_bg">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                                <div class="horizontal">
                                    <div class="button_icon"><i class="fa fa-user-circle"></i></div>
                                    <h3 class="title">Claim and Check Status </h3>
                                    <div class="input-button">
                                        <!-- <input class="btn" type="submit" name="claim" value="Claim">  -->
                                        <a class="btn" href="claim.php">Claim</a>
                                    </div>
                                
                                    <div class="input-button">
                                        <!-- <input class="btn" type="submit" name="check" value="Check"> -->
                                        <a class="btn" href="check.php">Check</a>
                                    </div>
                                
                                    <div class="input-button">
                                        <!-- <input class="btn" type="submit" name="logout" value="Logout"> -->
                                        <a class="btn" href="logout.php">Logout</a>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>











                
          
                
                
    </div>
</body>
</html>



<?php }?>


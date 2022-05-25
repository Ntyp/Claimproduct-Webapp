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
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    

                <div class="button_bg">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                                <div class="horizontal">
                                    <div class="button_icon"><i class="fa fa-user-circle"></i></div>
                                    <h3 class="title">Welcome to Admin Panel</h3>
                                    <h3 class="title">Login By Admin:  <?php echo $_SESSION['username']; ?></h3>
                                    <h3 class="title">Check Status and Update</h3>
                                    <div class="input-button">
                                        
                                        <a class="btn" href="productregistration.php">Regis Product</a>
                                    </div>
                                
                                    <div class="input-button">
                                       
                                        <a class="btn" href="checkstatus-admin.php">Check & Update</a>
                                    </div>
                                
                                    <div class="input-button">
                                        
                                        <a class="btn" href="history.php">History Claim</a>
                                    </div>

                                    <div class="input-button">
                                        
                                        <a class="btn" href="manage-admin.php">Manage Admin</a>
                                    </div>

                                    <div class="input-button">
                                        
                                        <a class="btn" href="logout.php">Logout</a>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>



</body>
</html>



<?php }?>


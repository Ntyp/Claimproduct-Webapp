<?php 
    session_start();
    include('connect.php');

    $status_product = "";
    $generation_product = "";
    $type_product = "";

    if(isset($_POST['submit'])) {

        $serialx = $_POST['serialx'];
        $query = "SELECT * FROM serialproduct WHERE serialx = '$serialx'";
        $result = mysqli_query($conn,$query);
        
        // Check Serial

        if(mysqli_num_rows($result) == 1) {
            $serialx = $_POST['serialx'];
            $query1 = "SELECT * FROM product WHERE serialx = '$serialx'";
            $result1 = mysqli_query($conn,$query1);
            // Check Serial Claim

            if(mysqli_num_rows($result1) == 1) {
                $array_product = mysqli_fetch_assoc($result1);
                $type_product  = $array_product['product_type'];
                $generation_product = $array_product['type_generation'];
                $status_product = $array_product['status'];
            }
            else {
                echo "<script> 
                alert('ไม่มี serial นี้ในระบบการเคลม'); 
                window.location.href='check.php';
            </script>";
            }
        }
        else {
            echo "<script> 
                alert('ไม่มี serial นี้ในระบบ'); 
                window.location.href='check.php';
            </script>";
        }



    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Status</title>
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



    <div class="form_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                        <form class="form_horizontal" method="post">
            
                                <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                                <h3 class="title">Check Status</h3>
                                <div class="form-group"></i>
                                    <label  for="serialx">Serial   <i class="fa fa-search" aria-hidden="true"></i></label><br><br>
                                    <input class="form-control" type="serialx" name="serialx" placeholder="Please Enter Serial" required><br>
                                </div>
                                <p>Product Type: <?php echo $type_product; ?></p>
                                <p>Generation: <?php echo $generation_product; ?></p>
                                <p>Status: <?php echo $status_product; ?></p>
                                <input class="btn check" type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>



   


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>

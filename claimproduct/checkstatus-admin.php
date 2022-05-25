<?php 
    session_start();
    include('connect.php');
    $status_product = "";
    if(isset($_POST['submit'])) {
        $serialx = $_POST['serialx'];
        $query = "SELECT * FROM serialproduct WHERE serialx = '$serialx'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {
            $serialx = $_POST['serialx'];
            $query1 = "SELECT * FROM product WHERE serialx = '$serialx'";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) == 1) {
                $array_product = mysqli_fetch_assoc($result1);
                $status_product = $array_product['status'];
            }
            else {
                echo "<script> 
                alert('ไม่มี serial นี้ในระบบการเคลม'); 
                window.location.href='checkstatus-admin.php';
            </script>";
            }
        }
        else {
            echo "<script> 
                alert('ไม่มี serial นี้ในระบบ'); 
                window.location.href='checkstatus-admin.php';
            </script>";
        }
    }
    else if(isset($_POST['getproduct'])) {
            $serialx = $_POST['serialx'];
            $query1 = "SELECT * FROM product WHERE serialx = '$serialx'";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) == 1) {
                $status_product = mysqli_query($conn,"UPDATE product SET status  = 'Get into the product' WHERE serialx = '$serialx'");
                echo "<script>
                    alert('อัปเดตสถานะเรียบร้อย');
                    window.location.href='admin.php';
                </script>";
            }
    }
    else if(isset($_POST['processproduct'])) {
        $serialx = $_POST['serialx'];
        $query1 = "SELECT * FROM product WHERE serialx = '$serialx'";
        $result1 = mysqli_query($conn,$query1);
        if(mysqli_num_rows($result1) == 1) {
            $status_product = mysqli_query($conn,"UPDATE product SET status = 'Processing' WHERE serialx = '$serialx'");
            echo "<script>
                alert('อัปเดตสถานะเรียบร้อย');
                window.location.href='admin.php';
            </script>";
        }
    }
    else if(isset($_POST['finishproduct'])) {
        $serialx = $_POST['serialx'];
        $query1 = "SELECT * FROM product WHERE serialx = '$serialx'";
        $result1 = mysqli_query($conn,$query1);
        if(mysqli_num_rows($result1) == 1) {
            $status_product = mysqli_query($conn,"UPDATE product SET status = 'Finish repair' WHERE serialx = '$serialx'");
            echo "<script>
                alert('อัปเดตสถานะเรียบร้อย');
                window.location.href='admin.php';
            </script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Status Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <div class="form_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
            <form class="form_horizontal" method="post">
                <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                <h3 class="title">Check Status and Update</h3>
                <div class="form-group">
                  <label class="input-icon"><i class="fa fa-user"></i></label>
                  <input class="form-control" type="serialx" name="serialx" placeholder="Please Enter Serial"required>
                </div>
                <input class="btn sigin" type="submit" name="submit" value="Submit">
                <h2>Status: <?php echo $status_product; ?></h2><br>
                <input class="btn sigin" type="submit" name="getproduct" value="Get into the product">
                <input class="btn sigin" type="submit" name="processproduct" value="Processing">
                <input class="btn sigin" type="submit" name="finishproduct" value="Finished repair"><br>
                <ul class="form-options">
                  <li><a href="productregistration.php">Registration Product <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                  <li><a href="admin.php">Admin Panel <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
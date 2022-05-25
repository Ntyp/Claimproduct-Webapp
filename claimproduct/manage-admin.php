<?php 
    session_start();
    include('connect.php');
    // $status= "";
    
    if(isset($_POST['adminstatus'])) {
            $username = $_POST['username'];
            $query1 = "SELECT * FROM user WHERE username = '$username'";
            $result1 = mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1) == 1) {
                $status = mysqli_query($conn,"UPDATE user SET status  = 'admin' WHERE username = '$username'");
                echo "<script>
                    alert('อัปเดตสถานะเรียบร้อย');
                    window.location.href='admin.php';
                </script>";
            }
            
    }
    else if(isset($_POST['memberstatus'])) {
        $username = $_POST['username'];
        $query1 = "SELECT * FROM user WHERE username = '$username'";
        $result1 = mysqli_query($conn,$query1);
        if(mysqli_num_rows($result1) == 1) {
            $status = mysqli_query($conn,"UPDATE user SET status  = 'member' WHERE username = '$username'");
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
    <title>Manage Admin</title>
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
                <h3 class="title">Update Status</h3>
                <div class="form-group">
                  <label class="input-icon"><i class="fa fa-user"></i></label>
                  <input class="form-control" type="text" name="username" placeholder="Please Username"required>
                </div>
                <input class="btn" type="submit" name="memberstatus" value="Status:Member">
                <input class="btn" type="submit" name="adminstatus" value="Status:Admin">
                <ul class="form-options">
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
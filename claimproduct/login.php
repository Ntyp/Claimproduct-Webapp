<?php 
    session_start();

    if(isset($_POST['username'])) {
        include('connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];
            if($_SESSION['status'] == "admin") {
                header("Location: admin.php");
            }
            else if($_SESSION['status'] == "member") {
                header("Location: index.php");
            }
        }
        else {
            echo "<script>
                alert 'Plese Check Your ID';
                window.location.herf='login.php';
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
    <title>Login Page</title>
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
                <h3 class="title">Login form</h3>


                <div class="form-group">
                  <label class="input-icon"><i class="fa fa-user"></i></label>
                  <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <span class="input-icon"><i class="fa fa-lock"></i></span>
                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>

                <input class="btn sigin" type="submit" name="submit" value="Login">

                <ul class="form-options">
                  <li><a href="register.php">Create New Accout <i class="fa fa-arrow-right"></i></a></li>
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
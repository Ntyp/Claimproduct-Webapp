


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>

    <div class="form_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">

            <form class="form_horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                <h3 class="title">Register form</h3>
                <div class="form-group">
                  <label class="input-icon"><i class="fa fa-user"></i></label>
                  <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                  <span class="input-icon"><i class="fa fa-lock"></i></span>
                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <span class="input-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <span class="input-icon"><i class="fa fa-android" aria-hidden="true"></i></span>
                    <input class="form-control" type="firstname" name="firstname" placeholder="Firstname" required>
                  </div>

                <div class="form-group">
                    <span class="input-icon"><i class="fa fa-android" aria-hidden="true"></i></span>
                    <input class="form-control" type="lastname" name="lastname" placeholder="Lastname" required>
                </div>
                <input class="btn sigin" type="submit" name="submit" value="Register">

                <ul class="form-options">
                  <li><a href="login.php">Login Here <i class="fa fa-arrow-right"></i></a></li>
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
<?php 
    session_start();

    include('connect.php');
    // connect to Database

    // Check submit button
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        // Check username used By sql
        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn,$user_check);
        $numuser = mysqli_num_rows($result);

        if(numuser > 0) {
            echo "<script>alert('Username used');</script>";
        }
        else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user set username = '$username', password = '$passwordenc', 
            email = '$email', firstname = '$firstname', lastname ='$lastname', status = 'member'";
                        

            $result = mysqli_query($conn,$query);

            if($result) {
                $_SESSION['success'] = "Insert user success";
                header("Location: login.php");
            }
            else {
                $_SESSION['error'] = "Fail to register";
                header("Location: register.php");
            }





        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <!-- <h2>Product registration</h2><br>
    <form action="productregistration-db.php    " method="post">
        <label for="serialx">Enter Serial</label>
        <input type="text" name="serialx" required>
        <label for="product_type">Product Type</label>
        <input type="product_type" name="product_type" required><br>
        <label for="type_genration">Type Genration</label>
        <input type="type_genration" name="type_genration" required><br>
        <label for="warranty">Warranty Expired:</label>
        <input type="warranty" name="warranty" placeholder="year-month-date">
        <input type="submit" name="submit" value="Submit"><br>
    </form>
    <a href="checkstatus-admin.php">Check Product</a><br>
    <a href="admin.php">Go Home</a> -->



    <div class="form_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">

            <form class="form_horizontal" action="productregistration-db.php" method="post">
                <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                <h3 class="title">Product registration</h3>
                <div class="form-group">
                  <label class="input-icon"><i class="fa fa-user"></i></label>
                  <!-- <input class="form-control" type="text" name="username" placeholder="Username" required> -->
                  <input class="form-control" type="text" name="serialx" placeholder="Serial"required>
                </div>

                <div class="form-group">
                  <span class="input-icon"><i class="fa fa-lock"></i></span>
                  <!-- <input class="form-control" type="password" name="password" placeholder="Password" required> -->
                  <input class="form-control" type="product_type" name="product_type" placeholder="Product Type" required>
                </div>

                <div class="form-group">
                    <span class="input-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <!-- <input class="form-control" type="email" name="email" placeholder="Email" required> -->
                    <input class="form-control" type="type_genration" name="type_genration" placeholder="Type_genration" required>
                </div>

                <div class="form-group">
                    <span class="input-icon"><i class="fa fa-android" aria-hidden="true"></i></span>
                    <!-- <input class="form-control" type="firstname" name="firstname" placeholder="Firstname" required> -->
                    <input class="form-control" type="warranty" name="warranty" placeholder="year-month-date Out of warranty" required>
                  </div>

                <input class="btn sigin" type="submit" name="submit" value="Submit">
                <ul class="form-options">
                  <li><a href="checkstatus-admin.php">Check Product <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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
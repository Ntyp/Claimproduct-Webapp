
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
    
    <title>Claim product</title>
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


        <div class="form_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                            <form class="form_horizontal" method="post" action="claim-db.php">
                
                                    <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                                    <h3 class="title">Product Claim form</h3>
                                    <div class="form-group">
                                        <label for="username">Username  <i class="fa fa-user" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="text" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nameuser">Name  <i class="fa fa-child" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="text" name="nameuser" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address  <i class="fa fa-home" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="address" name="address"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contract">Contract Number  <i class="fa fa-phone" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="contract" name="contract"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email  <i class="fa fa-envelope" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="email" name="email"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="serialx">Serial Number  <i class="fa fa-user" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="serialx" name="serialx"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Product Type  <i class="fa fa-desktop" aria-hidden="true"></i></label><br>
                                        
                                        <select  class="form-control " name="type_notebook">
                                            <option value="asus">Asus</option>
                                            <option value="acer">Acer</option>
                                            <option value="hp">Hp</option>
                                            <option value="msi">Msi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Generation  <i class="fa fa-microchip" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="generation" name="generation"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Issue Description  <i class="fa fa-address-book" aria-hidden="true"></i></label><br>
                                        
                                        <input class="form-control" type="description" name="description"required>
                                    </div>
                                    <input class="btn sigin" type="submit" name="submit" value="Submit">
                                    <ul class="form-options">
                                        <li><a href="check.php">Check Serial <i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    
    </div>




    
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>
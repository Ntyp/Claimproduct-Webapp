<?php 
    session_start();
    include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Claim</title>
    <link rel="stylesheet" href="css/style-admin-history.css">
</head>
<body>
    
        <h2><center>ประวัติการเคลมสินค้า</center></h2>
                    
        <table class="table">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>username</th>
                <th>address</th>
                <th>contract</th>
                <th>email</th>
                <th>serial</th>
                <th>type</th>
                <th>genration</th>
                <th>description</th>
                <th>date</th>
                <th>status</th>
            </thead>

            <?php 
                $sql = "SELECT * FROM product";
                $query = mysqli_query($conn,$sql);
                while($data = mysqli_fetch_array($query)){

                
            ?>
            <tbody>
                <tr>
                    <td data-label="Id"><?php echo $data['id'] ?></td>
                    <td data-label="Name"><?php echo $data['nameuser'] ?></td>
                    <td data-label="Username"><?php echo $data['username'] ?></td>
                    <td data-label="Address"><?php echo $data['addressuser'] ?></td>
                    <td data-label="Contract"><?php echo $data['contract_number'] ?></td>
                    <td data-label="Email"><?php echo $data['emailuser'] ?></td>
                    <td data-label="Serial"><?php echo $data['serialx'] ?></td>
                    <td data-label="Type"><?php echo $data['product_type'] ?></td>
                    <td data-label="Genration"><?php echo $data['type_generation'] ?></td>
                    <td data-label="Description"><?php echo $data['issue_description'] ?></td>
                    <td data-label="Date"><?php echo $data['createdate'] ?></td>
                    <td data-label="Status"><?php echo $data['status'] ?></td>
                        
                </tr>
                <?php } ?>   
            </tbody>
         </table>
         <div  class="linkadmin">
            <center><a href="admin.php">Admin Panel</a></center>
         </div>
    
</body>
</html>
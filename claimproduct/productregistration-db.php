<?php 
    session_start();
    include('connect.php');



    if(isset($_POST['submit'])) {


        $serialx = $_POST['serialx'];
        $product_type = $_POST['producttype'];
        $type_genration= $_POST['typegenration'];
        $warranty = $_POST['warranty'];
        $product_check = "SELECT * FROM serialproduct WHERE serialx = '$serialx' LIMIT 1";
        $result = mysqli_query($conn,$product_check);
        $numproduct = mysqli_num_rows($result);

        if($numproduct >0) {
            echo "<script> 
                alert('Serial used');
                window.location.herf='productregistration.php';
            </script>";
        }
        else {

            $query = "INSERT INTO serialproduct(serialx,product_type,type_genration,warranty)
            VALUE('".$_POST["serialx"]."','".$_POST["product_type"]."','".$_POST["type_genration"]."','".$_POST["warranty"]."')";

            $result = mysqli_query($conn,$query);

            if($result) {
                echo "<script> 
                    alert('Success to registration product');
                    window.location.href='productregistration.php';
                </script>";
            }
            else {
                echo "<script> 
                    alert('Fail to registration product');
                    
                    window.location.href='productregistration.php';
                </script>";
            }
        }
        
    }
?>
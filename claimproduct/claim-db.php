<?php 

    session_start();
    include('connect.php');


    if(isset($_POST['submit'])) {
        
        
        $username = $_POST['username'];
        $serialx = $_POST['serialx'];
        $date = date("Y-m-d");
        $query1 = "SELECT * FROM serialproduct WHERE serialx = '$serialx'";
        $result1 = mysqli_query($conn,$query1);
        if(mysqli_num_rows($result1) == 1) {
            $array_date = mysqli_fetch_array($result1);
            $warranty_time = $array_date['warranty'];
            if($warranty_time >= $date) {
                $query = "INSERT INTO product (username,nameuser,addressuser,contract_number,emailuser,serialx,product_type,type_generation,issue_description,createdate,status) 
                VALUES ('".$_POST["username"]."','".$_POST["nameuser"]."','".$_POST["address"]."','".$_POST["contract"]."','".$_POST["email"]."','".$_POST["serialx"]."','".$_POST["type_notebook"]."','".$_POST["generation"]."','".$_POST["description"]."','".$date."','Get into the product')";
        
                $result = mysqli_query($conn,$query);
                if($result) {
                
                echo "<script>
                        alert('บันทึกเรียบร้อย');
                        window.location.href='claim.php';
                        </script>";
                }
                else {
                echo "<script>
                        alert('บันทึกไม่สำเร็จ');
                        window.location.href='claim.php';
                        </script>";
                }
            } //End If $date
            else{
                echo "<script>
                        alert('สินค้านี้ประกันหมดอายุแล้ว');
                        window.location.href='claim.php';
                        </script>";
                
            }

        }
        else {
           echo "<script>
                alert('ไม่มีข้อมูลในระบบ');
                window.location.herf='claim.php';
            </script>";
            header("Location: claim.php");
        }
    } 
?>
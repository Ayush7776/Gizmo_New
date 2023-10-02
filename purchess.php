<?php
session_start();
include 'DbConnect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['Purchess'])&& $_POST['Pay']=="Pay On Delivery"){
        
        $query1="INSERT INTO `order_maneger`(`Full_Name`,`Address`, `Mobile_No`, `Pay_Mode`) VALUES ('$_POST[FName]','$_POST[Address]','$_POST[Mobile]','$_POST[Pay]')";
        
        if(mysqli_query($con,$query1)){
            
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);

                foreach ($_SESSION['cart'] as $key => $values) {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed..!');
                window.location.href='Home.php';
                </script>";
            }
            else{
                echo"<script>
                alert('SQL Prepared Error..!');
                window.location.href='cart.php';
                </script>";
            }
        }
        else{
            echo"<script>
            alert('SQL Error..!');
            window.location.href='cart.php';
            </script>";
        }

    }





    if(isset($_POST['Purchess'])&& $_POST['Pay']=="Pay Online"){
            
            echo"<script>
            alert('This Feature Is Avalaible Soon Please Select Pay On Delivery');
            window.location.href='cart.php';
            </script>";
        


    }
        
        

}


?>
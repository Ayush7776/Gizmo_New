<?php
$server="localhost";
$user="root";
$password="";
$database="gizmo";


$con=mysqli_connect($server,$user,"",$database);

        if(mysqli_connect_error()){
            echo"<script>
            alert('Cant Reach DataBase..!');
            </script>";
            exit();
        }
?>
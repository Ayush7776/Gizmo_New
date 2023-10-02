<?php
    $greenalert=false;
    $error=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'DbConnect.php';
    if(isset($_POST['Sighup'])){
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        // echo"$username";
        // echo"$email";
        // echo"$password";
        // echo"$cpassword";
        
        if($username==null || $email==null || $password==null || $cpassword==null || $password!=$cpassword){
            
            $error=true;
        }
        else{
            
            $createuser="INSERT INTO `users` (`UserName`, `Email`, `Password`, `Date`) VALUES ('$username', '$email', '$password', current_timestamp())";
            $result=mysqli_query($con,$createuser);
            if($result){
                $greenalert=true;
            }
        }



    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Gizmo Login</title>
</head>

<body>
    <?php
    if ($greenalert) {
        echo'<div class="alert alert-success  alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Account Is Created Sucessfully Please Login Using Creadentials..!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($error) {
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please Cheak Your Credentials..!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    
?>
    <div class="box">
            <img class="logo" src="Img/logo.jpg" alt="logo">
            <h1 class="name animate__animated animate__lightSpeedInLeft">GIZMO</h1>
            <div class="input animate__animated animate__lightSpeedInRight">
                <form action="Index.php" method="post">
                    <input id="username" type="text" name="username" placeholder="User Name" required>
                    <input id="pass" type="password" name="password" placeholder="Password" required>
                    <div id="eyechage" class="material-symbols-outlined ShowHidePass" onclick="ShowHidePass()">
                        visibility_off
                    </div>
                    <button type="submit" onclick="validatelogin()">Log In</button>
                </form>
            </div>
            <div class="links animate__animated animate__lightSpeedInRight">
                <h6 class="name" data-bs-toggle="modal" data-bs-target="#exampleModal">Sigh-Up</h6>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sigh-Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="Index.Php" method="post">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="exampleInputUserName" class="form-label">User Name</label>
                                <input type="text" name="username" class="form-control" id="exampleInputUserName">
                            </div>
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary shopnow" name="Sighup">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>

</html>
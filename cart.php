<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location:Login.Php");
  exit;
}

$name=$_SESSION['Name'];
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
  <link rel="stylesheet" href="Css/homestyle.css">
</head>
<title>My Cart</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <p class="logoname">GIZMO</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link navstyle" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navstyle" href="Home.php #shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navstyle" href="Home.php #featured-3">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navstyle" href="Home.php #contact">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link navstyle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Hello  <?php echo "$name";?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="navstyle" href="#">Something else here</a></li>
            <li><a class="dropdown-item " href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Login.php">Logout</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <?php
                  $count=0;
                  if(isset($_SESSION['cart'])){
                  $count=count($_SESSION['cart']);
                  }
                  ?>
            <a class="nav-link navstyle" href="cart.php">MyCart(
              <?php echo"$count ";?>)
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>






  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p id="contact" class="text-center logoname float-none my-3">My Cart</p>
      </div>

      <div class="col-lg-12 text-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
        // $total=0;
        if(isset($_SESSION['cart'])){
          foreach ($_SESSION['cart'] as $key => $value) {
            // $total=$total+$value['Price'];
            $srno=$key+1;
             echo"
             <tr>
             <td>$srno</td>
             <td>$value[Item_Name]</td>
             <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'> </td>
             <td>
              <form method='POST' action='Manege_cart.php'>
              <input class='text-center iquantity' name='Mode_Quantity' onchange='this.form.submit();' type='number' min='1' max='10' value='$value[Quantity]'>
             <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
              <form>
            </td>
              <td class='itotal'></td>
             <td>
             <form method='POST' action='Manege_cart.php'>
             <button name='Remove_Item' class='btn btn-danger btn-sm ' style='border-radius: 30px;'>Remove</button>
             <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
             </form>
             </td>
             </tr>
             ";
          }
        }
        ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){


?>
  <div class="container my-3" style="width:50%">
    <form action="purchess.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Full Name</label>
        <input type="text" class="form-control" name="FName" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Address</label>
        <input type="text" class="form-control" name="Address" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
        <input type="tel" class="form-control" name="Mobile" required>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Pay" value="Pay On Delivery">
        <label class="form-check-label" for="inlineRadio1">Pay On Delivery</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Pay" value="Pay Online">
        <label class="form-check-label" for="inlineRadio2">Pay Online</label>
      </div>
  </div>
  <div class="row text-center my-3">
    <div class="col-lg-6">
      <h4 id="gtotal"></h4>
    </div>
    <div class="col-lg-6">
      <button class="btn btn-primary shopnow " name="Purchess">Procede To Pay</button>
    </div>
  </form>
  <?php
}
  ?>
  </div>
</body>
<script>

  var iprice = document.getElementsByClassName('iprice');
  var iquantity = document.getElementsByClassName('iquantity');
  var itotal = document.getElementsByClassName('itotal');
  var gtotal = document.getElementById('gtotal');
  var gt = 0;
  function subTotal() {
    gt = 0;
    for (i = 0; i < iprice.length; i++) {
      itotal[i].innerText = ((iprice[i].value) * (iquantity[i].value));
      gt = gt + (iprice[i].value) * (iquantity[i].value);
    }
    gtotal.innerText = "Total : " + gt;
  }

  subTotal();




</script>

</html>
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
  <link rel="stylesheet" href="homestyle.css">
</head>
<title>Gizmo Home</title>
</head>

<body>
  <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
          <p class="logoname">GIZMO</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                      <a class="nav-link navstyle" href="Home.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link navstyle" href="#shop">Shop</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link navstyle" href="#featured-3">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link navstyle" href="#contact">Contact Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link navstyle" href="Index.html">Login</a>
                  </li>
                  <li class="nav-item">
                      <?php
                  session_start();
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

  <!-- Carosel -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Img/carousel1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Gizmo Watch 2 Pro</h5>
          <p>A Wearable Compter In The Form of A Watch</p>
          <button class="btn btn-primary shopnow">Shop Now</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Img/carousel2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Gizmo Pad Mini</h5>
          <p>Explore The World In Gizmo Pad Mini</p>
          <button class="btn btn-primary shopnow">Shop Now</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Img/carousel3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Gizmo Airpods 2 Max</h5>
          <p>They inclde suports for spatial audio and dolby</p>
          <button class="shopnowbtn btn-primary shopnow">Shop Now</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Products Buy Cards -->
  <div class="container-fluid">
    <div class="my-5 row" id="shop">
      <div class="card m-4 col-sm-3 p-0 p-0" style="width: 18rem;">
        <form action="Manege_cart.php" method="post">
          <img src="Img/baner1.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title text-center">Gizmo Pad Pro Max</h5>
            <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
              the
              card's</p>
            <div class="text-center">
              <h3 class="text-primary"><span class="material-symbols-outlined">
                  currency_rupee
                </span>17999</h3>
              <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
              <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
              <input type="hidden" name="Item_Name" value="GizmoPad">
              <input type="hidden" name="Price" value="17999">
            </div>
        </form>
      </div>
    </div>
    <div class="card m-4 col-sm-3 p-0 p-0" style="width: 18rem;">
      <form action="Manege_cart.php" method="post">
        <img src="Img/baner3.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <h5 class="card-title text-center">Gizmo Earebuds 2 Mini</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
            the
            card's</p>
          <div class="text-center">
            <h3 class="text-primary"><span class="material-symbols-outlined">
                currency_rupee
              </span>1499</h3>
            <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
            <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
            <input type="hidden" name="Item_Name" value="GizmoEarebuds">
            <input type="hidden" name="Price" value="1499">
          </div>
      </form>
    </div>
  </div>
  <div class="card m-4 col-sm-3 p-0 p-0" style="width: 18rem;">
    <form action="Manege_cart.php" method="post">
      <img src="Img/baner4.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title text-center">Gizmo Camera D 500</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
          the
          card's</p>
        <div class="text-center">
          <h3 class="text-primary"><span class="material-symbols-outlined">
              currency_rupee
            </span>99999</h3>
          <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
          <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
          <input type="hidden" name="Item_Name" value="GizmoCamera">
          <input type="hidden" name="Price" value="99999">
        </div>
    </form>
  </div>
  </div>
  <div class="card m-4 col-sm-3 p-0 p-0" style="width: 18rem;">
    <form action="Manege_cart.php" method="post">
      <img src="Img/baner2.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title text-center">Gizmo Phone 1</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
          the
          card's</p>
        <div class="text-center">
          <h3 class="text-primary"><span class="material-symbols-outlined">
              currency_rupee
            </span>21999</h3>
          <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
          <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
          <input type="hidden" name="Item_Name" value="GizmoPhone">
          <input type="hidden" name="Price" value="21999">
        </div>
    </form>
  </div>
  </div>
  </div>
  <div class="my-5 row" id="shop">
    <div class="card m-4 col-sm-3 p-0" style="width: 18rem;">
      <form action="Manege_cart.php" method="post">
        <img src="Img/baner5.jpg" class="card-img-top" alt="...">
        <div class="card-body ">
          <h5 class="card-title text-center">Gizmo Watch 2 Ultra</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
            the
            card's</p>
          <div class="text-center">
            <h3 class="text-primary"><span class="material-symbols-outlined">
                currency_rupee
              </span>19999</h3>
            <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
            <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
            <input type="hidden" name="Item_Name" value="GizmoWatch2">
            <input type="hidden" name="Price" value="19999">
          </div>
      </form>
    </div>
  </div>
  <div class="card m-4 col-sm-3 p-0" style="width: 18rem;">
    <form action="Manege_cart.php" method="post">
      <img src="Img/baner6.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title text-center">Gizmo Classic Smart TV</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
          the
          card's</p>
        <div class="text-center">
          <h3 class="text-primary"><span class="material-symbols-outlined">
              currency_rupee
            </span>39999</h3>
          <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
          <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
          <input type="hidden" name="Item_Name" value="GizmoSmartTv">
          <input type="hidden" name="Price" value="39999">
        </div>
    </form>
  </div>
  </div>
  <div class="card m-4 col-sm-3 p-0" style="width: 18rem;">
    <form action="Manege_cart.php" method="post">
      <img src="Img/baner7.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title text-center">GizmoHeadphoes</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
          the
          card's</p>
        <div class="text-center">
          <h3 class="text-primary"><span class="material-symbols-outlined">
              currency_rupee
            </span>3999</h3>
          <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
          <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
          <input type="hidden" name="Item_Name" value="Gizmo Headphoes">
          <input type="hidden" name="Price" value="3999">
        </div>
    </form>
  </div>
  </div>
  <div class="card m-4 col-sm-3 p-0" style="width: 18rem;">
    <form action="Manege_cart.php" method="post">
      <img src="Img/baner8.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title text-center">Gizmo Smart Speker</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of
          the
          card's</p>
        <div class="text-center">
          <h3 class="text-primary"><span class="material-symbols-outlined">
              currency_rupee
            </span>7999</h3>
          <button name="Add_To_Cart" class="btn btn-dark">Add To Cart</button>
          <button name="Add_To_Cart" class="btn btn-primary shopnow">Buy Now</button>
          <input type="hidden" name="Item_Name" value="GizmoSpeker">
          <input type="hidden" name="Price" value="7999">
        </div>
    </form>
  </div>
  </div>
  </div>
  </div>
  <!-- Meet Our Team About Us Page-->
  <div class="container px-4 py-5" id="featured-3">
    <h1 class="pb-2 border-bottom text-center align-middle">More About Us</h1>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <span class="material-symbols-outlined icon-size">
          leaderboard
        </span>
        <h3 class="fs-2">Auto Workflows</h3>
        <p>Data management systems are built on data management platforms and include a range of components and
          processes that work together to help you extract value.</p>
      </div>
      <div class="feature col">
        <span class="material-symbols-outlined icon-size">
          tips_and_updates
        </span>
        <h3 class="fs-2">Built-In Intelligence</h3>
        <p>Built-in intelligence uses AI technology and advanced sensors to detect fabric texture and load size to
          automatically select the perfect.</p>
      </div>
      <div class="feature col">
        <span class="material-symbols-outlined icon-size">
          database
        </span>
        <h3 class="fs-2">Data Management</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
          probably just keep going until we run out of words.</p>
      </div>
    </div>
  </div>
  <div class="container text-center align-middle">
    <h2><span class="mt-5 material-symbols-outlined icon-size">diversity_3</span>MEET OUR TEAM</h2>
    <h5 class="meet">We are all very different. We were born in different cities, at different times, we love different
      music, food, movies. But we have something that unites us all. It is our company. We are its heart. We are not
      just a team, we are a family.
    </h5>
    <div class="cotainer my-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-md-9 im ">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <div class="d-lg-block img-fluid im px-4">
                    <img class="rounded-circle" src="img/Kunal.JPG" alt="" height="200" width="200">
                  </div>
                  <h3 class="mb-0 my-3">Kunal Nikumbh</h3>
                  <strong class="d-inline-block mb-2 text-danger my-3">Busines Head</strong>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
                    content.This is a wider card with supporting text below as a natural lead-in to additional
                    content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-9 im ">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <div class="d-lg-block img-fluid im px-4">
                    <img class="rounded-circle" src="img/Yash.jpeg" alt="" height="200" width="200">
                  </div>
                  <h3 class="mb-0 my-3">Yash Pathak</h3>
                  <strong class="d-inline-block mb-2 text-info my-3">Full Stack Developer</strong>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
                    content.This is a wider card with supporting text below as a natural lead-in to additional
                    content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-9 im ">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <div class="d-lg-block img-fluid im px-4">
                    <img class="rounded-circle" src="img/Abhishek.jpg" alt="" height="200" width="200">
                  </div>
                  <h3 class="mb-0 my-3">Abhishek Bhavar</h3>
                  <strong class="d-inline-block mb-2 text-primary my-3">Back Office Head</strong>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
                    content.This is a wider card with supporting text below as a natural lead-in to additional
                    content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-md-9 im ">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <div class="d-lg-block img-fluid im px-4">
                    <img class="rounded-circle" src="img/Chetan.jpg" alt="" height="200" width="200">
                  </div>
                  <h3 class="mb-0 my-3">Chetan Patil</h3>
                  <strong class="d-inline-block mb-2 text-success my-3">Database Engineear</strong>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
                    content.This is a wider card with supporting text below as a natural lead-in to additional
                    content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <main class="form-signin w-100 m-auto container">
      <form>
        <p id="contact" class="logoname float-none mb-5">Contact-Us</p>
        <!-- <img class="mb-4" src="Img/" alt="" width="72" height="57"> -->
        <!-- <h1 class="h3 mb-3 fw-normal">Contact Us</h1> -->

        <div class="form-floating my-3">
          <input type="text" class="form-control" id="floatingName" placeholder="name@example.com">
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating my-3">
          <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating my-3">
          <input type="number" class="form-control" id="floatingPhone" placeholder="name@example.com">
          <label for="floatingInput">Phone</label>
        </div>
        <div class="form-floating my-3">
          <textarea type="text" class="form-control" id="floatingtextarea" placeholder="textarea"></textarea>
          <label for="floatingtextarea">Write Your Query</label>
        </div>
        <div class="form-floating my-3">
          <input type="file" class="form-control " id="floatingfile" placeholder="File">
          <label for="floatingFile">Upload Your Invoice</label>
        </div>
        <button class="w-50 btn btn-primary shopnow" type="submit">Send Query</button>

      </form>
    </main>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a>
          <span class="mb-3 mb-md-0 text-muted">© 2022 GIZMO, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
              </svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg></a></li>
        </ul>
      </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <title>EXEMPLE</title>
</head>
<body>
    <!-- Navigation -->
    <div class="top-nav">
      <div class="container d-flex">
        <p>Commandez en ligne ou appelez-nous : (225) 0757029422</p>
        <ul class="d-flex">
          <li><a href="#">A propos de nous</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="navigation">
      <div class="nav-center container d-flex">
      <a href="/" class="logo"><h1>
        <img src="./images/Logos.png" width="70" height="70" alt="">
      </h1></a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="/" class="nav-link">Acceuil</a>
          </li>
          <li class="nav-item">
            <a href="product.html" class="nav-link">Boutique</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">Aides</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="icons d-flex">
          <a href="login.html" class="icon">
            <i class="bx bx-user"></i>
          </a>
          <div class="icon">
            <i class="bx bx-search"></i>
          </div>
          <div class="icon">
            <i class="bx bx-heart"></i>
            <span class="d-flex">0</span>
          </div>
          <a href="cart.html" class="icon">
            <i class="bx bx-cart"></i>
            <span class="d-flex">0</span>
          </a>
        </li>
        </ul>
        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>
    <div class="container p-5">
       <div class="row">
           <div class="col-lg-3">
               <form method="POST" action="product_cart.php">
                <div class="card" >
                <img src="./images/product-7.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-warning text-center">
                    <h5 class="card-title text-center">POMME DE TERRE</h5>
                    <p class="card-text text-center">$150</p>
                    <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
                    <input type="hidden" name="Item_Name" value="POMME DE TERRE">
                    <input type="hidden" name="Price" value="150">
                </div>
                </div>
                </form>
           </div>
           <div class="col-lg-3">
               <form method="POST" action="product_cart.php">
                <div class="card" >
                <img src="./images/product-7.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-warning text-center">
                    <h5 class="card-title text-center">POMME</h5>
                    <p class="card-text text-center">$550</p>
                    <button type="submit" name="achete" class="signupbtn">ACHETER</button>
                    <input type="hidden" name="Item_Nam" value="POMME">
                    <input type="hidden" name="Pric" value="550">
                </div>
                </div>
                </form>
           </div>
           <div class="col-lg-3">
               <form method="POST" action="produit_cart.php" >
                <div class="card" >
                <img src="./images/product-7.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-warning text-center">
                    <h5 class="card-title text-center"> DE TERRE</h5>
                    <p class="card-text text-center">$550</p>
                    <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
                    <input type="hidden" name="Item_Name" value=" DE TERRE">
                    <input type="hidden" name="Price" value="550">
                </div>
                </div>
                </form>
           </div>
           <div class="col-lg-3">
               <form method="POST" action="produit_cart.php">
                <div class="card" >
                <img src="./images/product-7.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-warning text-center">
                    <h5 class="card-title text-center">POMME DE</h5>
                    <p class="card-text text-center">$850</p>
                    <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
                    <input type="hidden" name="Item_Name" value="POMME DE">
                    <input type="hidden" name="Price" value="850">
                </div>
                </div>
                </form>
           </div>
       </div>
    </div>

</body>
</html>
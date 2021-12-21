<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="style.css" />
    <title>BOUTIQUE</title>
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
      <a href="Acceuil.php" class="logo"><h1>
        <img src="./images/Logos.png" width="70" height="70" alt="">
      </h1></a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="Acceuil.php" class="nav-link">Acceuil</a>
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

        <div class="icons d-flex">
          <a href="./FootCare/blogd/Acceuile.php" class="icon">
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
        </div>

        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>


    <!-- All Products -->
    <section class="section all-products" id="products">
      <div class="top container">
        <h1>TOUS LES PRODUITS</h1>
        <form>
          <select>
            <option value="1">AUTRES</option>
            <option value="2">FRUITS</option>
            <option value="3">PETIT BONHEUR</option>
            <option value="4">AUTRE</option>
            <option value="5">AUTRE</option>
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        </form>
      </div>
      <div class="product-center container">
        <div class="product-item">
         <form method="POST" action="produit_cart.php" >
          <div class="overlay">
            <a href="productDetails.html" class="product-thumb">
              <img src="./images/product-2.jpg" alt="" />
            </a>
          </div>
          <div class="product-info">
            <p>PETIT BONHEUR AU COCO</p>
            <h4>$150</h4>
            <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            <input type="hidden" name="Item_Name" value="MEN'S CLOTHES">
            <input type="hidden" name="Price" value="150">
          </div>
          <ul class="icons">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-search"></i></li>
            <li><button type="submit"name="acheter"><i class="bx bx-cart"></i></button></li>
          </ul>
         </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/product-4.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU MIEL</p>
              <h4>$150</h4>
              <input type="hidden" name="Item_Name" value=" CLOTHES">
              <input type="hidden" name="Price" value="250">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit" name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/product-5.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU CHOCOLAT NOISETTE</p>
              <h4>$150</h4>
              <input type="hidden" name="Item_Name" value="MEN'S">
              <input type="hidden" name="Price" value="350">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit" name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/product-7.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU CHOCOLAT LAIT</p>
              <h4>$550</h4>
              <input type="hidden" name="Item_Name" value="MLOTHES">
              <input type="hidden" name="Price" value="550">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit"name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/product-8.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU MIEL</p>
              <h4>$150</h4>
              <input type="hidden" name="Item_Name" value="MEN'S CLOTHES">
              <input type="hidden" name="Price" value="150">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit" name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/product-9.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU LAIT SUCRE</p>
              <h4>$150</h4>
              <input type="hidden" name="Item_Name" value="MEN'S CLOTHES">
              <input type="hidden" name="Price" value="150">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit" name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/product-11.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU LAIT SUCRE</p>
              <h4>$150</h4>
              <input type="hidden" name="Item_Name" value="MEN'S CLOTHES">
              <input type="hidden" name="Price" value="150">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit" name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
        <div class="product-item">
          <form method="POST" action="produit_cart.php">
            <div class="overlay">
              <a href="productDetails.html" class="product-thumb">
                <img src="./images/nav.png" alt="" />
              </a>
            </div>
            <div class="product-info">
              <p>PETIT BONHEUR AU LAIT SUCRE</p>
              <h4>$150</h4>
              <input type="hidden" name="Item_Name" value="MEN'S CLOTHES">
              <input type="hidden" name="Price" value="150">
              <button type="submit" name="acheter" class="signupbtn">ACHETER</button>
            </div>
            <ul class="icons">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-search"></i></li>
              <li><button type="submit" name="acheter"><i class="bx bx-cart"></i></button></li>
            </ul>
           </form>
        </div>
      </div>
    </section>
    <section class="pagination">
      <div class="container">
      <span><a href="product.html">1</a></span> <span><a href="legume.php">2</a></span> <span><a href="Autre.php">3</a></span> <span>4</span>
        <span><i class="bx bx-right-arrow-alt"></i></span>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="">About us</a>
          <a href="">Contact Us</a>
          <a href="">Term & Conditions</a>
          <a href="">Shipping Guide</a>
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="">Online Store</a>
          <a href="">Customer Services</a>
          <a href="">Promotion</a>
          <a href="">Top Brands</a>
        </div>
        <div class="col d-flex">
          <span><i class="bx bxl-facebook-square"></i></span>
          <span><i class="bx bxl-instagram-alt"></i></span>
          <span><i class="bx bxl-github"></i></span>
          <span><i class="bx bxl-twitter"></i></span>
          <span><i class="bx bxl-pinterest"></i></span>
        </div>
      </div>
    </footer>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>
